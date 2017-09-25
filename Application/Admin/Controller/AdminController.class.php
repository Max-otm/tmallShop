<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/5
 * Time: 15:42
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;


use Admin\Model\AdminModel;

class AdminController extends \Think\Controller
{
    public function login(){
        if (IS_POST){
            $res=(new AdminModel())->login();
            if ($res['valid'] == 'error') {
                //登录失败
                $this->error($res['msg']);
                die;
            } else {
                $this->success($res['msg'], u('index/index'));
                die;
            }
        }
        $this->display();
    }

    /**
     * 验证码方法
     */
    public function code(){
        $config =   [
            'fontSize'=>    20,    // 验证码字体大小
            'length'=>    1,     // 验证码位数
            'imageW'=>100,          //验证码宽度
            'useNoise'=>    false, // 关闭验证码杂点
        ];
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }
}