<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/19
 * Time: 9:32
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Home\Controller;


use Think\Controller;

class ListsController extends Controller
{
    public function index(){
        $cid=I('get.cid');
        //1.处理面包屑
        $fatherData=$this->getFather(m('category')->select(),$cid);
        $fatherData = array_reverse($fatherData);
        $this->assign('fatherData',$fatherData);
        //2.获得自己和自己的子级
        $cids=$this->getSon(M('category')->select(),$cid);
        $cids[]=$cid;
        //3.查找cids下的gids
        $gids=m('goods')->where(['cid'=>['in',$cids]])->getField('gid',true);
        //4.处理商品所对应的属性
        if($gids){
            //找到商品的属性
            $goodsAttr=m('goods_attr')->where(['gid'=>['in',$gids]])
                ->group('gtvalue')->select();
            //重组数组 把taid值一样的数据放在一起
            $arr=[];
            foreach ($goodsAttr as $k=>$v){
                $arr[$v['taid']][]=$v;
            }
            //重组数组，把taid转化为对应的类型属性名称
            $attrData=[];
            foreach ($arr as $k=>$v){
                $attrData[]=[
                  'name'=>m('typeattr')->where("taid={$k}")->getField("taname"),
                    'value'=>$v,
                ];
            }
            $this->assign('attrData',$attrData);
            /**
             * 5.进行筛选
             */
            //设置param参数，用0填充
            //param=283_0_0_0_0_0_0_0_0_0
            //array_fill(start,number,value)
            //start必需。数值，规定键的起始索引。
            //number必需。数值，规定填充的数量，其值必须大于0。
            //value必需。规定要插入的值。
            $param = isset($_GET['param']) ? explode('_', $_GET['param']) : array_fill(0, count($attrData), 0);
            $this->assign('param', $param);


            $filterGids = [];
            foreach($param as $k=>$v){
                if ($v) {
                    //说明我点击了筛选 也就是点击了商品属性值
                    //找见gtid对应的商品属性值
                    $gtvalue = m('goods_attr')->where("gtid={$v}")->getField('gtvalue');
                    $filterGids[] = m('goods_attr')->where("gtvalue='{$gtvalue}'")->getField('gid', true);
                }
             }
                    if($filterGids){
                    //说明有筛选动作
                    //取交集(拿数组的第零号元素和后面的所有元素进行比较去交集)
                    foreach ($filterGids as $k => $v) {
                    //首先拿数组第零号元素
                    $filterGidsFirst = $filterGids[0];
                    $finalGids = array_intersect($filterGidsFirst,$v); //array_intersect() 函数返回两个或多个数组的交集数组。
                  }
                    $finalGids=$finalGids = array_intersect($finalGids,$gids);
                    }else{
                        //没有点击筛选 默认是不限
                        $finalGids = $gids;
                    }
            }else{
            //该分类没有对应的商品
            $finalGids = [];
        }
        if (empty($finalGids)){
            $goodsData=[];
        }else{
            $goodsData=m('goods')->where(['gid'=>['in',$finalGids]])->select();

        }
        $this->assign('goodsData',$goodsData);
        $this->display();
    }
    //获得父级
    public function getFather($data,$cid){
        static $arr;
        foreach($data as $k=>$v){
            if ($cid==$v['cid']){
                $arr[]=$v;
                $this->getFather($data,$v['pid']);
            }
        }
        return $arr;
    }
    //获得自己的子集
    public function getSon($data,$cid){
        static $arr=[];
        foreach ($data as $k=>$v){
            if ($cid==$v['pid']){
                $arr[]=$v['cid'];
                $this->getSon($data,$v['cid']);
            }
        }
        return $arr;
    }
}