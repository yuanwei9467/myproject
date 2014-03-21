<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-14
 * Time: 下午5:15
 */


namespace Admin\Controller;

use Think\Controller;

class IndexController extends AdminController{

    public function index(){
        $this->display();
    }

}