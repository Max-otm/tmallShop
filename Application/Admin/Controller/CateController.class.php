<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/6
 * Time: 19:11
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;


use Admin\Model\CategoryModel;
use Common\Controller\BaseController;
use Org\Util\ArrTree;

/**
 * Class CateController
 * @package Admin\Controller
 * 分类管理控制器
 */
class CateController extends BaseController
{
    //首页
    public function index(){
        $data=m('category')->select();
        foreach ($data as $k=>$v){
            $data[$k]['tname']=m('type')->where("tid='{$v['tid']}'")->getField('tname');
        }

        $cateData=(new ArrTree())->tree($data,'cname');
        $this->assign('cateData',$cateData);
        $this->display();
    }

    /**
     * 添加顶级分类
     */
    public function add(){
        $cid=I('get.cid');
        $this->assign('cid',$cid);
        if (IS_POST){
            $data=I('post.');
            $cateUnique=m('category')->where("cname='{$data['cname']}'")->select();
            foreach ($cateUnique as $k=>$v) {
                if ($v['cname']==$data['cname']&&$v['pid']==$data['pid']){
                    $this->error('该分类已经存在，请勿重复添加');
                }
            }
            $res = (new CategoryModel())->store($data);
            if ($res['valid'] == 'error') {
                $this->error($res['msg']);
                die;
            } else {
                $this->success($res['msg'], u('index'));
                die;
            }
        }

        $oldData = m('category')->where("cid='{$cid}'")->find();
        $types=m('type')->select();
        $this->assign('types',$types);
        $this->assign('oldData', $oldData);
        $this->display();
    }
    /**
     * 编辑方法
     */
    public function edit(){
        $cid=I('get.cid');
        //调用模型获得除自己和子类的分类数据
        $cateData=(new CategoryModel())->getcateData($cid);
        //树状分类项
        $cateData=(new ArrTree())->tree($cateData,'cname');
        //所有类型
        $typeData=m('type')->select();
        //旧数据

        $oldData = m('category')->where("cid='{$cid}'")->find();
        $this->assign('cateData',$cateData);
        $this->assign('typeData',$typeData);
        $this->assign('oldData', $oldData);
        if (IS_POST){
            $data=I('post.');
            $data['cid']=$cid;
            $res = (new CategoryModel())->store($data);
            if ($res['valid'] == 'error') {
                $this->error($res['msg']);
                die;
            } else {
                $this->success($res['msg'], u('index'));
                die;
            }
        }
        $this->display();
    }
    /**
     * 删除方法
     */
    public function delete(){
        $cid=I('get.cid');
        //父类的pid
        $pid=m('category')->where("cid={$cid}")->getField('pid');
        //实例化模型
        $category=M('category');
        //将了类的pid改成父类的pid上位
        $data['pid']=$pid;
        $category->where("pid={$cid}")->save($data);
        //删除父类
        $category->where("cid={$cid}")->delete();

        $this->success('删除成功', u('index'));
    }

}