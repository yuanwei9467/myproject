<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-14
 * Time: 下午5:23
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Hook;

class PublicController extends Controller{
    public function login(){
        Hook::listen('action_begin');
        if(IS_POST){
            $username   = I('username');
            $password   = I('password');
            $verify     = I('verify');
        }else{
            $this->display();
        }
    }
    /**
     * 显示验证码
     */
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
}