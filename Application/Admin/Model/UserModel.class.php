<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/13
 * Time: 15:04
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class UserModel extends BaseModel
{
    // 主键名称
    protected $pk               =   'uid';
    // 当前数据库操作对象
    protected $db               =   "user";
    // 自动验证定义
    protected $_validate        =   [
        ['username','require','类型名不能为空'],
    ];

    /**
     * @param $data
     * @return array
     * 注册
     */
    public function register($data){
        if (!$this->create()) {
            //验证失败情况
            return ['valid' => 'error', 'msg' => $this->getError()];
        }else {
            if (m('user')->where("username='{$data['username']}'")->select()) {
                return ['valid' => 'error', 'msg' =>'该用户名已存在'];
            }
            if ($data['password'] != $data['password1']) {
                return ['valid' => 'error', 'msg' =>'两次密码输入不一致'];
            }
            $userData = [
                'username' => $data['username'],
                'upassword' => md5($data['password']),
            ];
            $this->add($userData);
            return ['valid' => 'success', 'msg' =>'注册成功'];
        }
    }
    /**
     * 登陆
     */
    public function login($data){
        if ($this->where("username='{$data['username']}' and upassword='{$data['upassword']}'")->select()){
            $userData=$this->where("username='{$data['username']}' and upassword='{$data['upassword']}'")->find();
            $_SESSION['user']=[
                'uid'=>$userData['uid'], 'username'=>$userData['username']];
            return ['valid' => 'success', 'msg' =>'登陆成功'];
        }else{
            return ['valid' => 'error', 'msg' =>'用户名或密码错误'];
        }
    }

}