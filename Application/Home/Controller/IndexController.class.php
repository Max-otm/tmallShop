<?php
namespace Home\Controller;

use Org\Util\ArrTree;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //获得所有顶级分类的cid
        $cateDate=m('category')->where('pid=0')->order('csort asc')->getField('cid',true);
        $data=m('category')->select();
        $cate=[];
        foreach ($cateDate as $k=>$v) {
            //获得顶级分类下的所有数据并分级
            $cate[]= (new ArrTree())->channelList($data,$v);
        }
        foreach ($cate as $k=>$v){
            foreach ($v as $kk=>$vv){
                //获得一级分类的数据
                if ($vv['_level']==1){
                    $parentCate[$k][]=$vv;
                }
                //获得二级分类的数据
                if ($vv['_level']==2){
                    $sonCate[$k][]=$vv;
                }
                //获得二级分类的数据
                if ($vv['_level']==3){
                    $grandCate[$k][]=$vv;
                }
            }
        }
        //分配变量
        $this->assign('parentCate',$parentCate);
        $this->assign('sonCate',$sonCate);
        $this->assign('grandCate',$grandCate);
        //获取商标数据
        $brandData=m('brand')->order('bsort desc')->limit(24)->select();
        $this->assign('brandData',$brandData);
        //一楼商品数据
        //一楼类别男装女装内衣
        $goodsData=m('goods')->where("tid in (1,3,4,5)")->order('gid desc')->limit(6)->field(['gid','gname','pic'])->select();
        $goodsrData=m('goods')->where("tid in (1,3,4,5)")->order('gid asc')->limit(3)->field(['gid','gname','pic'])->select();
        $cateDataon=m('category')->where("tid in (1,3,4,5) ")->order('cid asc')->limit(10)->field(['cid','cname','tid'])->select();
        $this->assign('cateDataon',$cateDataon);
        $this->assign('goodsData',$goodsData);
        $this->assign('goodsrData',$goodsrData);
        //二楼商品数据
        //二楼类别电子，手机，电脑
        $goodsDatatw=m('goods')->where("tid in (14,16,17)")->order('gid desc')->limit(1)->field(['gid','gname','pic'])->find();
        $goodsmDatatw=m('goods')->where("tid in (14,16,17)")->order('gid desc')->limit(5)->field(['gid','gname','pic'])->select();
        foreach ($goodsmDatatw as $k=>$v){
            if($v==$goodsDatatw){
                unset($goodsmDatatw[$k]);
            }
        }
        $goodsrDatatw=m('goods')->where("tid in (14,16,17)")->order('gid asc')->limit(2)->field(['gid','gname','pic'])->select();
        $cateDatatw=m('category')->where("tid in (14,16,17) ")->order('cid asc')->limit(10)->field(['cid','cname','tid'])->select();
        $this->assign('cateDatatw',$cateDatatw);
        $this->assign('goodsDatatw',$goodsDatatw);
        $this->assign('goodsmDatatw',$goodsmDatatw);
        $this->assign('goodsrDatatw',$goodsrDatatw);
        //三楼商品数据
        //三楼类别食品生活酒牛奶
        $goodsDatath=m('goods')->where("tid in (15,11,8,9)")->order('gid desc')->limit(6)->field(['gid','gname','pic'])->select();
        $goodsrDatath=m('goods')->where("tid in (15,11,8,9)")->order('gid asc')->limit(3)->field(['gid','gname','pic'])->select();
        $cateDatath=m('category')->where("tid in (15,11,8,9) ")->order('cid asc')->limit(10)->field(['cid','cname','tid'])->select();
        $this->assign('cateDatath',$cateDatath);
        $this->assign('goodsDatath',$goodsDatath);
        $this->assign('goodsrDatath',$goodsrDatath);
        //猜你喜欢
        $posibleLike=m('goods')->order('click desc')->limit(15)->select();
        $this->assign('posibleLike',$posibleLike);
        //载入首页模板
        $this->display();
    }
}