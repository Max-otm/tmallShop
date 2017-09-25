<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/15
 * Time: 20:01
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Home\Controller;


use Common\Controller\BaseUserController;
use Org\Util\Cart;

class OrderController extends BaseUserController
{
    private  $Data;
    public function __construct()
    {
        parent::__construct();
        $uid=$_SESSION['user']['uid'];
        //三表关联
        $orderData=m('order')->alias('o')->join('__ORDER_LIST__  ol ON o.oid=ol.oid')
            ->join('__GOODS__ g ON ol.gid=g.gid')
            ->where("o.uid={$uid}")
            ->order('o.oid desc')
            ->select();
        foreach($orderData as $k=>$v){
            $combine=m('goods_list')->where("glid={$v['glid']}")->getField('combine');
            $combine= explode(',',$combine);
            //炸开gtid组合成数组
            foreach ($combine as $kk=>$vv){
                //寻找到gtid对应的属性
                $combine[$kk]=m('goods_attr')->where("gtid={$vv}")->getField('gtvalue');

            }
            //重新组成字符串
            $orderData[$k]['spec']=implode(',',$combine);
        }
        $this->Data=$orderData;
    }

    /**
     * 首页
     */
    public function index(){
        $orderData=$this->Data;
        $this->assign('orderData',$orderData);
        $this->display();
    }
    //待付款
    public function nopay(){
        $orderData=$this->Data;
        $data=[];
        foreach ($orderData as $k=>$v){
            if($v['status']=='待付款'){
                $data[]=$v;
            }
        }
        $orderData=$data;
        $this->assign('orderData',$orderData);
        $this->display();
    }
    //待发货
    public function haspost(){
        $orderData=$this->Data;
        $data=[];
        foreach ($orderData as $k=>$v){
            if($v['status']=='待发货'){
                $data[]=$v;
            }
        }
        $orderData=$data;
        $this->assign('orderData',$orderData);
        $this->display();
    }
    //待收货
    public function noreceive(){
        $orderData=$this->Data;
        $data=[];
        foreach ($orderData as $k=>$v){
            if($v['status']=='已发货'){
                $data[]=$v;
            }
        }
        $orderData=$data;
        $this->assign('orderData',$orderData);
        $this->display();
    }
    //已完成
    public function already(){
        $orderData=$this->orderData;
        $data=[];
        foreach ($orderData as $k=>$v){
            if($v['status']=='已完成'){
                $data[]=$v;
            }
        }
        $orderData=$data;
        $this->assign('orderData',$orderData);
        $this->display();
    }
    //立即购买
    public function buyNow(){
        if(IS_AJAX){
            $gid=I('post.gid');
            $goodsData=m('goods')->where("gid={$gid}")->find();
            $options=trim(I('post.options'),',');
            $data = [
                'id' 		=> $gid, // 商品 ID
                'name'		=>$goodsData['gname'],// 商品名称
                'num' 		=> I('post.num'), // 商品数量
                'price' 	=> $goodsData['shopprice'], // 商品价格
                'options'   => $options,// 其他参数如价格、颜色、可以为数组或字符串
                'pic'		=>$goodsData['pic'],//商品logo
            ];
            $cart=new Cart();
            $cart->add($data); // 添加到购物车
            //获取货品信息
            $goodsData=$cart->getGoods();
            foreach($goodsData as $k=>$v) {
                //为获得glid得要分解规格来找到货品
                $attr = explode(',', $v['options']);
                foreach ($attr as $kk => $vv) {
                    $attr[$kk] = m('goods_attr')->where("gid={$v['id']} and gtvalue='{$vv}'")->getField('gtid');
                }
                $combine = implode(',', $attr);
                //获得货品规格
                $glid = m('goods_list')->where("combine='{$combine}' and gid={$v['id']}")->getField('glid');
                //当没获取到$glid的时候提示没有货品
                if (is_null($glid)) {
                    unset($_SESSION['cart']);
                    $this->ajaxReturn(0);
                }
            }
            $totalPrice=$cart->getTotalPrice();
            $user=m('user');
            $uid=$_SESSION['user']['uid'];
            $money=$user->where("uid={$uid}")->getField('money');
            $money=$money-$totalPrice;
            //余额检测
            if($money<0){
                $this->ajaxReturn(['message'=>'您的余额不足，请及时冲值']);
            }else{
                $udata['money']=$money;
                $res=$user->where("uid={$uid}")->save($udata);
                p($res);die;
            }
            //order表添加数据
            $uid=$_SESSION['user']['uid'];
            $addressData=m('address')->where("uid={$uid} and iscur=1")->find();
            $data['number']=$cart->getTotalNums();
            $data['consignee']=$addressData['consignee'];
            $data['address']=$addressData['area'].$addressData['address'];
            $data['phone']=$addressData['phone'];
            $data['total']=$cart->getTotalPrice();
            $data['time']=time();
            $data['remark']='';
            $data['status']='未付款';
            $data['uid']=$_SESSION['user']['uid'];
            $order=M('order');
            $oid=$order->add($data);
            //order_list表添加数据
            foreach($goodsData as $k=>$v){
                //为获得glid得要分解规格来找到货品
                $attr=explode(',',$v['options']);
                foreach($attr as $kk=>$vv){
                    $attr[$kk]=m('goods_attr')->where("gid={$v['id']} and gtvalue='{$vv}'")->getField('gtid');
                }
                $combine=implode(',',$attr);
                //获得货品规格
                $glid=m('goods_list')->where("combine='{$combine}' and gid={$v['id']}")->getField('glid');
                //获得货品编号
                $glnumber=m('goods_list')->where("combine='{$combine}' and gid={$v['id']}")->getField('number');
                $arr=[
                    'quantity'=>$v['num'],//数量
                    'subtotal'=>$v['price'],// 小计
                    'explain'=>'',//注释
                    'gid'=>$v['id'],//货品id
                    'glid'=>$glid,//货品列表id*/
                    'oid'=>$oid,
                    'glnumber'=>$glnumber
                ];
                $orderList=m('order_list');
                $orderList->add($arr);
            }

            unset($_SESSION['cart']);
            $this->ajaxReturn(1);
        }
    }
}