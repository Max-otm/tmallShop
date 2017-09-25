<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/15
 * Time: 10:09
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Home\Controller;


use Org\Util\Cart;
use Think\Controller;

class ContentController extends Controller
{
    public function index(){
        $gid=I('get.gid');
        //获取货物数据
        $goodsData=M('goods')->where("gid={$gid}")->find();
        $this->assign('goodsData',$goodsData);
        //获取该货物下的规格
        $specData=m('typeattr')->where("class=1 and tid={$goodsData['tid']}")->field(['taid,taname'])->select();
        foreach ($specData as $k => $v) {
            $specData[$k]['select'] = m('goods_attr')
                ->where("taid={$v['taid']} and gid={$gid}")
                ->select();
        }
        $attrData=m('typeattr')->where("class=2 and tid={$goodsData['tid']}")->field(['taid,taname'])->select();
        foreach ($attrData as $k => $v) {
            $attrData[$k]['attr'] = m('goods_attr')
                ->where("taid={$v['taid']} and gid={$gid}")
                ->find();
        }
        $this->assign('attrData',$attrData);
        $this->assign('specData',$specData);
        //获取详情表数据
        $detailData=m('detail')->where("gid={$gid}")->find();
        $detailData['big']=explode('|',$detailData['big']);
        $detailData['medium']=explode('|',$detailData['medium']);
        $detailData['small']=explode('|',$detailData['small']);
        $detailData['intro']=html_entity_decode( $detailData['intro']);
        $this->assign('detailData',$detailData);
        $this->display();
    }
    public function joinCart(){
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
            (new Cart())->add($data); // 添加到购物车
            $goodsData=(new Cart())->getGoods();
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
            $this->ajaxReturn($_SESSION);
        }
    }
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
            (new Cart())->add($data); // 添加到购物车
            $this->ajaxReturn($_SESSION);
        }
    }
}