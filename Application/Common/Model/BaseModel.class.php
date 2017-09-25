<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/6
 * Time: 10:45
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Common\Model;


use Think\Model;

class BaseModel extends Model
{
    public function store($data){
        //判断是否有主键 有就调用save() 无则新增add()
        $action=isset($data[$this->pk])?'save':'add';
        $res= $this->$action($data);
        if (is_null($res)){
            return ['valid'=>'error','msg'=>$this->getError()];

        }else{
            return ['valid'=>'success','msg'=>'操作成功','res'=>$res];
        }
    }
}