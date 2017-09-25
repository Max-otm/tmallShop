<?php
/**
 * Created by Maxyoo.
 * Date: 2017/6/19
 * Time: 19:22
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class AddressModel extends BaseModel
{
// 主键名称
    protected $pk               =   'adid';
    // 当前数据库操作对象
    protected $db               =   "address";
    // 自动验证定义
    protected $_validate        =   [
        ['consignee','require','收件人不能为空'],
    ];
    public function store($data){
        if (!$this->create()){
            return['valid'=>"error",'msg'=>$this->getError()];
        }else{
            $res=$this->save($data);
            return ['valid'=>'success','msg'=>'操作成功','res'=>$res];
        }
    }
}