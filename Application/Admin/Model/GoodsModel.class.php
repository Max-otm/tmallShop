<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/8
 * Time: 15:40
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;

use Common\Model\BaseModel;

class GoodsModel extends BaseModel
{
    // 主键名称
    protected $pk               =   'gid';
    // 当前数据库操作对象
    protected $db               =   "goods";
    // 自动验证定义
    protected $_validate        =   [
        ['gname','require','货物名不能为空'],
    ];
    public function store($data){
        //货物名验证
        if (!$this->create()) {
            return ['valid' => 'error', 'msg' => $this->getError()];
        }
        //1货品表添加
        $data['time']=time();
        $data['aid']=$_SESSION['admin']['aid'];
        $gid=$this->add($data);
        //失败返回错误
        if (!$gid) {
            return ['valid' => 'error', 'msg' => $this->getError()];
        }
        //2货物属性表添加
        $goodsAttrModel=new GoodsAttrModel();
        //属性添加
        foreach ($data['attr'] as $k=>$v) {
            $goodAttrData=[
                'gtvalue'=>$v,
                'added'=>0,
                'taid'=>$k,
                'gid'=>$gid
            ];
            $goodsAttrModel->add($goodAttrData);
        }
        //规格添加
        foreach ($data['spec']as $k=>$v){
            foreach ($v['norms'] as $kk=>$vv) {
                $goodAttrData=[
                    'gtvalue'=>$vv,
                    'added'=>$v['added'][$kk],
                    'taid'=>$k,
                    'gid'=>$gid
                ];
                $goodsAttrModel->add($goodAttrData);
            }
        }
        //3详情表添加
        //处理图片
        $detailModel=new DetailModel();
        $bigPath='';
        $mediumPath='';
        $smallPath='';
        foreach ($data['img'] as $k=>$v){
            $image = new \Think\Image();
            //获取相对路径
            $path=substr($v,20);
            //open打开的是一个相对路径
            $image->open($path);
                //大图
            $bigPath.=$v.'|';

                //中图
            $medium=dirname($path).'/medium_'.basename($v);
            // 按照原图的比例生成一个最大为400*400的缩略图并保存路径同样是相路径
            $image->thumb(400, 400)->save($medium);
            $mediumPath.=__ROOT__.'/'.$medium.'|';
            //小图
            $small=dirname($path).'/small_'.basename($v);
            // 按照原图的比例生成一个最大为60*60的缩略图并保存路径同样是相路径
            $image->thumb(60, 60)->save($small);
            $smallPath.=__ROOT__.'/'.$small.'|';
        }
        $detailData=[
            'small'=>rtrim($smallPath,'|'),
            'medium'=>rtrim($mediumPath,'|'),
            'big'=>rtrim($bigPath,'|'),
            'intro'=>$data['intro'],
            'service'=>$data['service'],
            'gid'=>$gid,
        ];
       $detailModel->add($detailData);
       if (!$detailModel->create()){
           return ['valid' => 'error', 'msg' => $this->getError()];
       }
        return ['valid' => 'success', 'msg' => '添加成功'];
    }

    /**
     * @return array
     * 编辑方法
     */
    public function edit($data){
        //货物名验证
        if (!$this->create()) {
            return ['valid' => 'error', 'msg' => $this->getError()];
        }
        //1货品表编辑
        $gid=$data['gid'];
        $data['aid']=$_SESSION['admin']['aid'];
        $this->save($data);
        //2货物属性表添加
        $goodsAttrModel=new GoodsAttrModel();
        //属性添加
        $res=$goodsAttrModel->where("gid={$gid}")->delete();
        foreach ($data['attr'] as $k=>$v) {
            $goodAttrData=[
                'gtvalue'=>$v,
                'added'=>0,
                'taid'=>$k,
                'gid'=>$gid
            ];
          $goodsAttrModel->add($goodAttrData);
        }
        //规格添加
        foreach ($data['spec']as $k=>$v){
            foreach ($v['norms'] as $kk=>$vv) {
                $goodAttrData=[
                    'gtvalue'=>$vv,
                    'added'=>$v['added'][$kk],
                    'taid'=>$k,
                    'gid'=>$gid
                ];
                $goodsAttrModel->add($goodAttrData);
            }
        }
        //3详情表添加
        //处理图片
        $detailModel=new DetailModel();
        $detailModel->where("gid={$gid}")->delete();
        $bigPath='';
        $mediumPath='';
        $smallPath='';
        if($data['img']=='0'||is_null($data['img'])){
            return ['valid' => 'error', '请选择列表图'];
        }
        foreach ($data['img'] as $k=>$v){
            if ($data['img']=='0'||is_null($v)){
                unset($data['img'][$k]);
            }
            $image = new \Think\Image();
            //获取相对路径
            $path=substr($v,20);
            //open打开的是一个相对路径
            $image->open($path);
            //大图
            $bigPath.=$v.'|';

            //中图
            $medium=dirname($path).'/medium_'.basename($v);
            // 按照原图的比例生成一个最大为400*400的缩略图并保存路径同样是相路径
            $image->thumb(400, 400)->save($medium);
            $mediumPath.=__ROOT__.'/'.$medium.'|';
            //小图
            $small=dirname($path).'/small_'.basename($v);
            // 按照原图的比例生成一个最大为60*60的缩略图并保存路径同样是相路径
            $image->thumb(60, 60)->save($small);
            $smallPath.=__ROOT__.'/'.$small.'|';
        }
        $detailData=[
            'small'=>rtrim($smallPath,'|'),
            'medium'=>rtrim($mediumPath,'|'),
            'big'=>rtrim($bigPath,'|'),
            'intro'=>$data['intro'],
            'service'=>$data['service'],
            'gid'=>$gid,
        ];
        $detailModel->add($detailData);

        return ['valid' => 'success', 'msg' => '修改成功'];
    }
}