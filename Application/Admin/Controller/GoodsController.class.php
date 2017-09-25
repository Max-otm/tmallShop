<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/8
 * Time: 10:51
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;


use Admin\Model\DetailModel;
use Admin\Model\GoodsAttrModel;
use Admin\Model\GoodsModel;
use Common\Controller\BaseController;
use Org\Util\ArrTree;
use wechat\build\pay;

class GoodsController extends BaseController
{
    private $model;
    public function __construct()
    {
        $this->model=new GoodsModel();
        parent::__construct();
    }

    public function index(){
        $count      = $this->model->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $this->model->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
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
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //添加方法
    public function add(){
        $cateData=(new ArrTree())->tree(m('category')->select(),'cname');
        $brandData=m('brand')->select();
        if (IS_POST){
            $data=I('post.');
           $res= $this->model->store($data);
            if ($res['valid'] == 'error') {
                $this->error($res['msg']);
                die;
            } else {
                $this->success($res['msg'], u('index'));
                die;
            }
        }
        $this->assign('brandData',$brandData);
        $this->assign('cateData',$cateData);
        $this->display();
    }

    /**
     * 异步获取属性列表
     */
    public function getAttr(){
        if (IS_AJAX){
            $tid=I('post.tid');
            $typeAttrData=m('typeattr')->where("tid={$tid}")->select();
            foreach ($typeAttrData as $k=>$v){
                if (strstr($v['tavalue'],',')){
                    $typeAttrData[$k]['tavalue'] = explode(',',$v['tavalue']);
                }else{
                    $typeAttrData[$k]['tavalue'] = explode('，',$v['tavalue']);
                }
            }
            $this->ajaxReturn($typeAttrData);
        }
    }
    public function edit(){
        $gid=I('get.gid');
        //1 获取旧数据 货物表和详情表数据
        $oldData=$this->model->alias('g')->join('LEFT JOIN __DETAIL__ d on g.gid=d.gid')->where("g.gid={$gid}")->find();
        $oldData['big']=explode('|',$oldData['big']);
        $this->assign('oldData',$oldData);
        //2 分类表数据
        $cateData=(new ArrTree())->tree(m('category')->select(),'cname');
        $this->assign('cateData',$cateData);

        //3 商标数据
        $brandData=m('brand')->select();
        $this->assign('brandData',$brandData);
        //4 类型属性数据
        $typeAttr=m('typeattr')->where("tid={$oldData['tid']} and class=2")->select();
            //将属性值转化成数组
        foreach ($typeAttr as $k=>$v){
            if (strstr($v['tavalue'],',')){
                $typeAttr[$k]['tavalue'] = explode(',',$v['tavalue']);
            }else{
                $typeAttr[$k]['tavalue'] = explode('，',$v['tavalue']);
            }
        }
        $this->assign('typeAttr',$typeAttr);
            //获取该商品选中的商品属性
       $checkAttr=m('goods_attr')->where("gid={$gid}")->getField('gtvalue',true);
        $this->assign('checkAttr',$checkAttr);
        //5 类型规格数据
        $typeSpec=M('goods_attr')->alias('ga')->join('__TYPEATTR__ ta on ga.taid=ta.taid')->where("class=1 and gid={$gid}")->select();
         //将属性值转化成数组
        foreach ($typeSpec as $k=>$v){
            if (strstr($v['tavalue'],',')){
                $typeSpec[$k]['tavalue'] = explode(',',$v['tavalue']);
            }else{
                $typeSpec[$k]['tavalue'] = explode('，',$v['tavalue']);
            }
        }
        $this->assign('typeSpec',$typeSpec);
        //判断是否提交
        if (IS_POST){
           $data=I('post.');

           $data['gid']=$gid;
           $data['time']=$oldData['time'];
           $res=$this->model->edit($data);
           if ($res['valid']=='error'){
               $this->error($res['msg']);
               die;
           } else {
               $this->success($res['msg'], u('index'));
               die;
           }
        }
        $this->display();
    }
    //删除方法
    public function delete(){
        $gid=I('get.gid');
        $this->model->where("gid={$gid}")->delete();
        $goodsAttr=new GoodsAttrModel();
        $goodsAttr->where("gid={$gid}")->delete();
        $Detail=new DetailModel();

        $imgs=$Detail->where("gid={$gid}")->find();

        $imgs['small']=explode('|',$imgs['small']);
        $this->delimg($imgs['small']);

        $imgs['medium']=explode('|',$imgs['medium']);
        $this->delimg($imgs['medium']);

        $imgs['big']=explode('|',$imgs['big']);
        $this->delimg($imgs['big']);

        $Detail->where("gid={$gid}")->delete();
        $this->success('删除成功', u('index'));die;
    }
    public function delimg($imgs){
        foreach ( $imgs as $v) {
            $path=substr($v,20);
            unlink ( $path);
        }
    }
}