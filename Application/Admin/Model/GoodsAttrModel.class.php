<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/8
 * Time: 17:09
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class GoodsAttrModel extends BaseModel
{
    // 主键名称
    protected $pk               =   'gtid';
    // 当前数据库操作对象
    protected $db               =   "goods_attr";
    // 自动验证定义
    protected $_validate        =   [

    ];
}