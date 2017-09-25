<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/16
 * Time: 13:36
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Home\Controller;


use Common\Controller\BaseUserController;
use Org\Util\Cart;

class SubmitController extends BaseUserController
{
    //主页
    public function index(){
       $goodsData=(new Cart())->getGoods();
        foreach ($goodsData as $k=>$v) {
            $bid=m('goods')->where("gid={$v['id']}")->getField("bid");
            $goodsData[$k]['brand']=m('brand')->where("bid={$bid}")->find();
        }
        $this->assign('goodsData',$goodsData);
        //总价格
        $totalPrice=(new Cart())->getTotalPrice();
        $this->assign('totalPrice',$totalPrice);
        //用户id
        $uid=$_SESSION['user']['uid'];
        //地址信息
        $addressData=m('address')->where("uid={$uid}")->select();
        foreach ($addressData as $k=>$v){
            $addressData[$k]['area']=explode(',', $addressData[$k]['area']);
        }
        $consigneeData=m('address')->where("iscur=1")->find();
        $consigneeData['area']=explode(',', $consigneeData['area']);
        $this->assign('consigneeData',$consigneeData);
        $this->assign('addressData',$addressData);
        $this->display();
    }
    public function addr(){
        if(IS_AJAX){
            $uid=$_SESSION['user']['uid'];
            //修改判断  如果传来的adid不==‘’时做编辑任务
            if(I('post.adid')!=''){
                $data=[
                    'iscur'=>I('post.iscur'),
                    'consignee'=>I('post.consignee'),
                    'phone'=>I('post.phone'),
                    'area'=>trim(I('post.area'),','),
                    'address'=>I('post.address'),
                    'uid'=>$uid,
                    'adid'=>I('post.adid'),
                ];
                //重置默认地址
                if(I('post.iscur')==1){
                    $oldCur= m('address')->getField('adid',true);
                    foreach ($oldCur as $v) {
                        $address=M('address');
                        $cur['iscur']=0;
                        $address->where("adid={$v['adid']}")->field('iscur')->save($cur);
                    }
                }
                $id=I('post.adid');
                $address=M('address');
                $address->save($data);
                //返回数据  这里为什么用id接收adid呢，以后会知道的，反正用adid的话会描灰会有问题
                $addrData=m('address')->where("adid={$id}")->find();
                $addrData['area']=explode(',',$addrData['area']);
                $this->ajaxReturn($addrData);
            }else{
                //新增任务
                $data=[
                    'iscur'=>I('post.iscur'),
                    'consignee'=>I('post.consignee'),
                    'phone'=>I('post.phone'),
                    'area'=>trim(I('post.area'),','),
                    'address'=>I('post.address'),
                    'uid'=>$uid,
                ];
                //重置默认地址
                if(I('post.iscur')==1){
                    $oldCur= m('address')->getField('adid',true);
                    foreach ($oldCur as $v) {
                        $address=M('address');
                        $cur['iscur']=0;
                        $address->where("adid={$v['adid']}")->field('iscur')->save($cur);
                    }
                }
                $address=M('address');
                $adid=$address->data($data)->add();
                //返回数据
                $addrData=m('address')->where("adid={$adid}")->find();
                $addrData['area']=explode(',',$addrData['area']);
                $this->ajaxReturn($addrData);
            }
        }
    }
    //编辑地址
    public function edit(){
        if (IS_AJAX){
            $adid=I('post.adid');
            $returnData=m('address')->where("adid={$adid}")->find();
            $returnData['area']=explode(',',$returnData['area']);
            $this->ajaxReturn($returnData);
        }
    }
    //删除地址
    public function delete(){
        $adid=I('get.adid');
        M('address')->where("adid={$adid}")->delete();
        $this->success('删除成功',u('index'));
    }
    //提交
    public function confirm(){
        if(IS_AJAX){
            $cart=new Cart();
            // 先扣钱
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
            $goodsData=$cart->getGoods();
            $data['number']=$cart->getTotalNums();
            $data['consignee']=I('post.consignee');
            $data['address']=I('post.addr');
            $data['phone']=I('post.phone');
            $data['total']=$cart->getTotalPrice();
            $data['time']=time();
            $data['remark']=I('post.remark');
            $data['status']='待发货';
            $data['uid']=$_SESSION['user']['uid'];
            $order=M('order');
            $oid=$order->add($data);
            foreach($goodsData as $k=>$v){
                $attr=explode(',',$v['options']);
                foreach($attr as $kk=>$vv){
                    $attr[$kk]=m('goods_attr')->where("gid={$v['id']} and gtvalue='{$vv}'")->getField('gtid');
                }
                $combine=implode(',',$attr);
                $glid=m('goods_list')->where("combine='{$combine}' and gid={$v['id']}")->getField('glid');
                $glnumber=m('goods_list')->where("combine='{$combine}' and gid={$v['id']}")->getField('number');
                $arr=[
                    'quantity'=>$v['num'],//数量
                    'subtotal'=>$v['price'],// 小计
                    'explain'=>'',//注释
                    'gid'=>$v['id'],//货品id
                    'glid'=>$glid,//货品列表id*/
                    'oid'=>$oid, //订单号
                    'glnumber'=>$glnumber //货号
                ];
                $orderList=m('order_list');
                $orderList->add($arr);
            }
            unset($_SESSION['cart']);
            $this->ajaxReturn(1);
        }
    }
}