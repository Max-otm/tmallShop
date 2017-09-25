<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/6
 * Time: 19:54
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class CategoryModel extends BaseModel
{
    // 主键名称
    protected $pk               =   'cid';
    // 当前数据库操作对象
    protected $db               =   "category";
    // 自动验证定义
    protected $_validate        =   [
        ['cname','require','分类名不能为空'],
    ];
    public function store($data){
        if (!$this->create()) {
            //验证失败情况
            return ['valid' => 'error', 'msg' => $this->getError()];
        }else{
            return parent::store($data);
        }
    }
    public function getcateData($cid){
        $data=m('category')->select();
        //获取分类表
        $data=$this->getSonCate($data,$cid);
        //返回分类表
        return $data;
    }
    public function getSonCate($data,$cid){
        //定义一个静态数组
        static $arr=[];
        foreach ($data as $k=>$v) {
            //删除自己
            if ($data[$k]['cname']==m('category')->where("cid={$cid}")->getField('cname')){
                unset($data[$k]);
            }
            //如果pid等于$cid也就是他的子类
            if ($cid==$v['pid']){
                unset($data[$k]);
                //给数组插入新数据
                $arr[]=$v['cid'];
                //递归      如果是其他子类的父类就再插入数据
                $this->getSonCate($data,$v['cid']);
            }
        }
        //返回一个没有自己和自己子分类数据的分类列表
        return $data;
    }
}