<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-26
 * Time: 上午10:09
 */

namespace Admin\Controller;

class SuggestController extends \Think\Controller{

    private $suggest_model;

    /**
     * 初始化操作，实例化suggest模型类
     */
    public function _initialize(){
        $this->suggest_model = D('suggest');


    }
    public function index(){


    }
    /**
     * 新增页面
     */
    public function add(){

        $this->assign('type',$this->suggest_model->getType());


        $this->display();
    }

    /**
     * 保存意见信息
     */
    public function save(){
        $name = I('title');
        $type_id = I('type');

    }

}