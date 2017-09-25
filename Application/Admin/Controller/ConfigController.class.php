<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/5
 * Time: 17:00
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;



use Common\Controller\BaseController;

class ConfigController extends BaseController
{
    public function index(){
        //获得配置表里的数据
        $data=m('config')->select();
        $this->assign('data',$data);
        if (IS_POST){
            $newData=I('post.');
            $config = M("config"); // 实例化config对象
            // 要修改的数据对象属性赋值
            foreach ($newData as $k=>$v){
            $config->value = $v;
            $config->where("name='{$k}'")->save(); // 根据条件更新记录
            }
            $this->success('操作完成',u('config/index'),2);die;
        }
        $this->display();
    }
}