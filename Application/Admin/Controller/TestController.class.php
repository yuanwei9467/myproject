<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-21
 * Time: 下午2:41
 */
namespace Admin\Controller;

class TestController extends \Think\Controller{
    public function index(){
        echo session_id();
        //setcookie('name','yuanwei',time()+10);
        echo $_COOKIE['name'];
    }
}