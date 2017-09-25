<?php

/**
 * Created by 涂禹天.
 * Date: 2017/6/5
 * Time: 15:13
 * Email:1635358408@qq.com
 * QQ:1635358408
 */
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model
{
    // 主键名称
    protected $pk               =   'aid';
    // 当前数据库操作对象
    protected $db               =   "admin";
    // 自动验证定义
    protected $_validate        =   [
        ['username','require','用户名不能为空'],
    ];
    public function login(){
        //1进行自动验证
        if (!$this->create()){
            return['valid'=>"error",'msg'=>$this->getError()];
        }else{
            $data=I('post.');
            //2,对比验证码
            /*if (!$this->check_verify($data['code'])){
                return['valid'=>"error",'msg'=>'验证码错误'];
            }*/
            //3.比对用户名密码

            $data['password'] = md5($data['password']);
            //进行查询
            $userData=m('admin')->where("aname='{$data['aname']}' and password = '{$data['password']}' ")->find();
            if (!$userData){
                return ['valid'=>'error','msg'=>'用户名或密码错误'];
            }else{
                $_SESSION['admin'] = ['aid'=>$userData['aid'],'aname'=>$userData['aname']];
                //验证成功情况
                return ['valid'=>'success','msg'=>'登录成功'];
            }
        }
    }
    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    public function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}