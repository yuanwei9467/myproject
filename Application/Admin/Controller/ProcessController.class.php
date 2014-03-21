<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-4
 * Time: 上午11:16
 */

namespace Admin\Controller;

class ProcessController extends \Think\Controller{

    /**
     * 新增流程
     */
    public function add(){
        if(IS_POST){
            $name = I('name');
            if(M('process')->add(array('name'=>$name))){
                $this->success('新增成功');
            }
        }
        $this->display();
    }


}