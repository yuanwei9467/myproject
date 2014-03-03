<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-3
 * Time: 上午11:25
 */
namespace Admin\Model;
class AttachmentsModel extends \Think\Model{

    protected $fields = array('md5','size','ext','sha1','name','savename','savepath');

    public function saveFiles($files){
        $md5 = $files['md5'];
        if($row = $this->where(array('md5'=>$md5))->find()){

            return $row;
        }else{
            $id = $this->add($files);
            if($id){
                $files['id'] = $id;
                return $files;
            }else{
                return false;
            }
        }
    }
}