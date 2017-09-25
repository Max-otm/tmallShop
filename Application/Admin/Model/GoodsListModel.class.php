<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/12
 * Time: 13:30
 * Email:1635358408@qq.cm
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class GoodsListModel extends BaseModel
{
    // 主键名称
    protected $pk = 'glid';
    // 数据表名（不包含表前缀）
    protected $tableName = 'goods_list';
    // 自动验证定义
    protected $_validate = [
        ['inventory', 'require', '库存数量不能为空'],
        ['number', 'require', '货号不能为空'],
    ];

    /**
     * @param $data 数据
     * @return array 返回valid：成功or 失败
     * 编辑，添加方法
     */
    public function store($data){
        if (!$data['glid']){
            if ($this->where("combine='{$data['combine']}' and gid={$data['gid']}")->select()){
                return ['valid' => 'error', 'msg' => '该规格已经存在，请勿重复添加，如需要请去该规格下修改'];
            }
        }
        if (!$this->create()){
            return ['valid' => 'error', 'msg' => $this->getError()];
        }else{
            return parent::store($data);
        }
    }
}