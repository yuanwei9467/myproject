<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-26
 * Time: 下午1:08
 */

namespace Admin\Model;

class SuggestModel extends \Think\Model{

    /**
     * 类型表
     */
    const TYPE_TABLE = 'suggest_type';
    protected $tableName = 'suggestion';

    /**
     * @return bool|void
     */
    public function save($data){
        if($data['id']){
            $this->save($data);
        }else{
            $this->create($data);
            $this->add();
        }
    }

    /**
     * 获取类型
     */
    public function getType($where = array()){
        $model = M(self::TYPE_TABLE);
        if(!empty($where)){
            $type = $model->where($where)->select();
        }else{
            $type = $model->select();
        }
        return $type;
    }

}