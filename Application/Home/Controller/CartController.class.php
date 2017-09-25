<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/15
 * Time: 14:07
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Home\Controller;


use Org\Util\Cart;
use Think\Controller;

class CartController extends Controller
{
    public function index(){
        $Cart=(new Cart());
        $goodsData=$Cart->getGoods();
        foreach ($goodsData as $k=>$v) {
            $bid=m('goods')->where("gid={$v['id']}")->getField("bid");
            $goodsData[$k]['brand']=m('brand')->where("bid={$bid}")->find();
        }
        $totalPrice=(new Cart())->getTotalPrice();
        $this->assign('totalPrice',$totalPrice);
        $this->assign('goodsData',$goodsData);
        $this->display();
    }
    //增加
    public function add(){
        if(IS_AJAX){
            $k=I('post.kk');
            $num=$_SESSION['cart']['goods'][$k]['num'];
            $num=$num+1;
            $data = [
                'sid' => $k,// 唯一 sid，添加购物车时自动生成
                'num' => $num
            ];
            (new Cart())->update($data);
            $returnData = [
                'total' => $_SESSION['cart']['goods'][$k]['total'],//小计
                'total_price' => (new Cart())->getTotalPrice(),
            ];
            $this->ajaxReturn($returnData);
        }
    }
    //减少
    public function minus(){
        if(IS_AJAX){
            $k=I('post.kk');
            $num=$_SESSION['cart']['goods'][$k]['num'];
            $num=$num-1;
            if ($num<=0){
                $num=1;
            }
            $data = [
                'sid' => $k,// 唯一 sid，添加购物车时自动生成
                'num' => $num
            ];
            (new Cart())->update($data);
            $returnData = [
                'total' => $_SESSION['cart']['goods'][$k]['total'],//小计
                'total_price' => (new Cart())->getTotalPrice(),
            ];
            $this->ajaxReturn($returnData);
        }
    }
    //删除
    public function del(){
        if (IS_AJAX){
            $k=I('post.k');
            $num=$_SESSION['cart']['goods'][$k]['num'];
            $totalNums=(new Cart())->getTotalNums()-$num;
            $totalprice=(new Cart())->getTotalPrice()-$_SESSION['cart']['goods'][$k]['total'];
            unset($_SESSION['cart']['goods'][$k]);
            $_SESSION['cart']['total_rows'] = $totalNums;
            $_SESSION['cart']['total'] = $totalprice;
            $returnData = [
                'total_price' => (new Cart())->getTotalPrice(),
            ];
            $this->ajaxReturn($returnData);
        }
    }
}