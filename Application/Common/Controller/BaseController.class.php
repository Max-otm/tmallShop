<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/5
 * Time: 16:59
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Common\Controller;


use Think\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$_SESSION['admin']){
            $this->success('请登录!',u('admin/login'));die;
        }
    }
}