<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-3
 * Time: 下午4:29
 */

class SuggestionModel extends \Think\Model{


    public function saveData($data){
        if($data['id']){
            $this->save($data);
        }else{
            $this->create($data);
            $this->add();
        }
    }



}