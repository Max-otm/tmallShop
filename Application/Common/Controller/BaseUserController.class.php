<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/15
 * Time: 14:42
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Common\Controller;


use Think\Controller;

class BaseUserController extends Controller
{
    public function __construct()
    {

        parent::__construct();
        if(!$_SESSION['user']){
           $url= $_SERVER['PHP_SELF'];
            cookie('refer',$url);
            $this->success('请登录!',u('Home/User/login'));die;
        }
    }
}