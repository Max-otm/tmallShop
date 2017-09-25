<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/5
 * Time: 18:55
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;


use Admin\Model\TypeattrModel;
use Admin\Model\TypeModel;
use Common\Controller\BaseController;

class TypeController extends BaseController
{
    /**
     * 首页方法
     */
    public function index(){
        $Type = M('type'); // 实例化User对象
        $count = $Type->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Type->order('tid desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        //给追加样式
        $show .= <<<str
        <style>
            /*其他页、上一页、下一页样式*/
            .pagination .num,.prev,.next{
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #337ab7;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd
            }
            /*当前分页样式*/
            .pagination .current{
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: red;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd
            }
            .pagination .headerPage{
                position: relative;
                float: left;
                padding: 6px 12px;
                text-decoration: none;
                background-color: #fff;

            }
        </style>

str;
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    /**
     * 编辑和添加方法
     */
    public function save(){
        // 获取传来的tid
        $tid=I('get.tid');
        if (IS_POST){
            $data=I('post.');

            if ($tid){

                $data['tid']=$tid;
            }else if(m('type')->where("tname='{$data['tname']}'")->select()){
                    $this->error('该类型已经存在');die;
            }
            $res=(new TypeModel())->store($data);
            if($res['valid']=='error'){
                $this->error($res['msg']);die;
            }else{
                $this->success($res['msg'],u('index'));die;
            }
        }
        $oldData = m('type')->where("tid='{$tid}'")->find();
        $this->assign('oldData',$oldData);
        $this->display();
    }
    public function delete(){
        $tid=I('get.tid');
        $type=M('type');
        $res=$type->delete($tid);
        $typearr=M('typearr');
        $typearr->where("tid={$tid}")->delete();
        if ($res){
            $this->success('删除成功',u('index'));die;
        }else{
            $this->error('删除失败');die;
        }
    }
    public function typeattr(){
        $tid=I('get.tid');
        $tname=m('type')->where("tid={$tid}")->find();
        $this->assign($tname);
        $typeattr = M('typeattr'); // 实例化User对象
        $count = $typeattr->where("tid={$tid}")->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $typeattr->where("tid={$tid}")->order('taid desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        //给追加样式
        $show .= <<<str
        <style>
            /*其他页、上一页、下一页样式*/
            .pagination .num,.prev,.next{
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #337ab7;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd
            }
            /*当前分页样式*/
            .pagination .current{
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: red;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd
            }
            .pagination .headerPage{
                position: relative;
                float: left;
                padding: 6px 12px;
                text-decoration: none;
                background-color: #fff;

            }
        </style>

str;
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    public function attrsave(){
        // 获取传来的taid
        $taid=I('get.taid');
        //获取保存的tid
        $tid=I('get.tid');
        if (IS_POST){
            $data=I('post.');
            $data['tid']=$tid;
            if ($taid){
                $data['taid']=$taid;
            }else if(m('typeattr')->where("taname='{$data['taname']}' AND tid={$tid}")->select()){
                $this->error('该属性已经存在');die;
            }
            $res=(new TypeattrModel())->store($data);
            if($res['valid']=='error'){
                $this->error($res['msg']);die;
            }else{
                $this->success($res['msg'],u('typeattr',['tid'=>$tid]));die;
            }
        }
        $oldData=m('typeattr')->where("taid='{$taid}'")->find();
        $this->assign('oldData',$oldData);
        $this->display();
    }
    public function attrdelete(){
        $taid=I('get.taid');
        $tid=I('get.tid');
        //获取保存的tid
        $typeattr=M('typeattr');
        $res=$typeattr->delete($taid);
        if ($res){
            $this->success('删除成功',u('typeattr',['tid'=>$tid]));die;
        }else{
            $this->error('删除失败');die;
        }
    }
}