<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/13
 * Time: 9:19
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Home\Controller;


use Admin\Model\UserModel;
use Think\Controller;

class UserController extends Controller
{
    public function login(){

        if (IS_POST){
            $data=I('post.');
            $data['upassword']=md5($data['password']);
            $res=(new UserModel())->login($data);
            if ($res['valid'] == 'error') {
                $this->error($res['msg']);
                die;
            } else {
                if ($_COOKIE['refer']){
                    $url=$_COOKIE['refer'];
                    $this->success($res['msg'], $url);die;
                }else{
                    $this->success($res['msg'], u('Home/Index/index'));
                    die;
                }
            }
        }
        $this->display();
    }
    public function register(){
        if (IS_POST){
            $data=I('post.');
            $res=(new UserModel())->register($data);
            if ($res['valid'] == 'error') {
                $this->error($res['msg']);
                die;
            } else {
                $this->success($res['msg'], u('login'));
                die;
            }
        }
        $this->display();
    }
    public function out(){
        unset($_SESSION['user']);
        $this->success('退出成功', u('login'));die;
    }
}