<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/19
 * Time: 17:05
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;


use Admin\Model\AddressModel;
use Common\Controller\BaseController;

class UserController extends BaseController
{
    public function index(){
        $userData=m('user')->select();
        $this->assign('userData',$userData);
        $this->display();
    }
    public function addr(){
        $uid=I('get.uid');
        $addressData=m('address')->where("uid={$uid}")->select();
        $this->assign('addressData',$addressData);
        $this->display();
    }
    public function edit(){
        $adid=I('get.adid');
        $uid=I('get.uid');
        $oldData=m('address')->where("adid={$adid}")->find();
        $oldData['area']=explode(',',$oldData['area']);
        $this->assign('oldData',$oldData);
        if(IS_POST){
            $data=$_POST;
            $data['adid']=$adid;
            $res=(new AddressModel())->store($data);
            if($res['valid']=='error'){
                $this->error($res['msg']);die;
            }else{
                $this->success($res['msg'],u('addr',['uid'=>$uid]));die;
            }
        }
        $this->display();
    }
    public function delete(){
        $adid=I('get.adid');
        $uid=I('get.uid');
        $addr=M('address');
        $addr->where("adid={$adid}")->delete();
        $this->success('删除成功',u('Admin/User/addr',['uid'=>$uid]));
    }
}