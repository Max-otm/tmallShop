<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/7
 * Time: 19:05
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class BrandModel extends BaseModel
{
// 主键名称
    protected $pk               =   'bid';
    // 当前数据库操作对象
    protected $db               =   "brand";
    // 自动验证定义
    protected $_validate        =   [
        ['bname','require','品牌名不能为空'],
        ['brandlogo','require','品牌图不能为空'],
    ];
    public function store($data){
        if (!$this->create()) {
            //验证失败情况
            return ['valid' => 'error', 'msg' => $this->getError()];
        }else{
            return parent::store($data);
        }
    }

}