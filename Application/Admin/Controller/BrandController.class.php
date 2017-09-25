<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/7
 * Time: 16:15
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;


use Admin\Model\BrandModel;
use Common\Controller\BaseController;

class BrandController extends BaseController
{
    //首页
    public function index(){
        $brand = M('brand'); // 实例化User对象
        $count = $brand->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $brand->order('bid desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
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
    //添加和编辑方法
    public function save(){
        $bid=I('get.bid');
        if (IS_POST){
            $data=I('post.');
            if ($bid){
                $data['bid']=$bid;
            }else if (m('brand')->where("bname='{$data['bname']}'")->find()){
                $this->error('该商标已经存在，请勿重复添加');die;
            }
            $res=(new BrandModel())->store($data);
            if ($res['valid'] == 'error') {
                $this->error($res['msg']);
                die;
            } else {
                $this->success($res['msg'], u('index'));
                die;
            }
        }
        $oldData=M('brand')->where("bid='{$bid}'")->find();
        $this->assign('oldData',$oldData);
        $this->display();
    }
    //删除
    public function delete(){
        $bid=I('get.bid');
        $brand=M('brand');
        $res=$brand->delete($bid);
        if ($res){
            $this->success('删除成功',u('index'));die;
        }else{
            $this->error('删除失败');die;
        }
    }
}