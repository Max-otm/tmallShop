<?php
/**
 * Created by PhpStorm.
 * User: 凌
 * Date: 2017/6/21
 * Time: 8:51
 */

namespace Admin\Controller;


use Common\Controller\BaseController;
use Think\Model;

class OrderController extends BaseController
{
    public function index(){
        $orderData=m('order')->select();
        $model=new Model();
        $res=$model->query("show columns from  tpshop_order like 'status'");
        $status=explode('(',$res[0]['type']);
        $status=explode(')',$status[1]);
        $status=explode(",",$status[0]);
        for($i = 0; $i < count ( $status ); $i ++) {
            $status[$i] = str_replace ( "'", "", $status[$i] );
        }
        foreach($orderData as $k=>$v){
            $orderData[$k]['glnumber']=m('order_list')->where("oid={$v['oid']}")->getField('glnumber');
        }
        $this->assign('status',$status);
        $this->assign('orderData',$orderData);
        $this->display();
    }

    /**
     * 修改发货状态方法
     */
    public function changesta(){
        if(IS_AJAX){
            $oid=I('post.oid');
            $status=I('post.status');
            $order=M('order');
            $order->status=$status;
            $order->where("oid={$oid}")->save();
            $this->ajaxReturn(1);
        }
    }

    /**
     * 删除订单方法
     */
    public function delete(){
        $oid=I('get.oid');
        //订单表删除
        $order=m('order');
        $order->delete($oid);
        //订单列表删除
        $orderList=m('order_list');
        $orderList->where("oid={$oid}")->delete();
        $this->success('删除成功',u('index'));
    }
}