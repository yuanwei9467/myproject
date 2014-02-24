<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-21
 * Time: 下午3:44
 */

namespace Admin\Model;

class CategoryModel extends \Think\Model{

    protected $pk = 'id';         //主键
    protected $_validate = array(

        array('name','','分类名称已经存在!',0,'unique',1),

    );

    public function saveCategory($data){

        $data = $this->create($data);
        if($data[$this->pk]){
            $id = $this->save($data);
        }else{
            $id = $this->add($data);
        }
        return $id;
    }

    public function getCategories(){

        return $this->query("SELECT *,CONCAT(path,'-',id) as bpath from ".$this->getTableName()." ORDER BY bpath");
    }


}