<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/12
 * Time: 9:57
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Controller;

use Admin\Model\GoodsListModel;
use Common\Controller\BaseController;

/**
 * Class GoodsListController
 * @package Admin\Controller
 * 货品列表控制器
 */
class GoodsListController extends BaseController
{
    /**
     * 首页方法
     */
    public function index(){
        $gid=I('get.gid');
        $googsListData=m('goods_list')->where("gid={$gid}")->select();
        //将combine中的属性显示出来
        foreach ($googsListData as $k=>$v) {
            //炸开gtid组合成数组
            $combine=explode(',',$v['combine']);
            foreach ($combine as $kk=>$vv){
                //寻找到gtid对应的属性
                $combine[$kk]=m('goods_attr')->where("gtid={$vv}")->getField('gtvalue');
            }
            //重新组成字符串
            $googsListData[$k]['combine']=implode(',',$combine);
        }
        $this->assign('data',$googsListData);
        $this->display(); // 输出模板
    }
    /**
     * 添加,编辑
     */
    public function save(){
        $gid=I('get.gid');
        $glid=I('get.glid');
        $attr=m('typeattr')->alias('ta')
            ->join('__GOODS__ g on ta.tid=g.tid')
            ->where("class=1 and gid={$gid}")
            ->field(['taid','taname'])
            ->select();
        foreach ($attr as $k=>$v){
            $attr[$k]['select']=m('goods_attr')->alias('gt')
                ->where("taid={$v['taid']} and gid={$gid}")->select();
        }
        $this->assign('data',$attr);
        if ($glid){
            $oldData=m('goods_list')->where("glid='{$glid}'")->find();
            $oldData['combine']=explode(',',$oldData['combine']);
            $this->assign('oldData',$oldData);
        }
        if (IS_POST){
            $data=I('post.');
            $data['gid']=$gid;
            $data['combine']=implode(',', $data['combine']);
            if ($glid){
                $data['glid']=$glid;
                //编辑下不可以修改商品规格 与旧规格比较
                if ($data['combine']!=implode(',',$oldData['combine'])){
                    return $this->error('编辑模式下不可修改商品规格，如有需要，请自行添加',u('admin/GoodsList/save',['glid'=>$glid,'gid'=>$gid]),2);
                }
            }
            $res=(new GoodsListModel())->store($data);
            if ($res['valid']=='error'){
                return $this->error($res['msg']);die;
            }else{
                return $this->success($res['msg'],u("index",['gid'=>$gid]));
            }
        }
        $this->display();
    }
    /**
     * 删除方法
     */
    public function delete(){
        $glid=I('get.glid');
        $gid=I('get.gid');
        $goodsList=m('goods_list');
        $goodsList->delete($glid);
        $this->success('删除成功',u("index",['gid'=>$gid]));
    }
}