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
        layout(false);
        if(cookie('username')){
            $this->assign('remeber',1);
        }
        $this->display();


    }
    /**
     * 显示验证码
     */
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }

    /**
     * 验证登陆
     */
    public function checklogin(){
        $username = I('username');
        $password = I('password');
        $remeber = I('remeber');
        $user_model = D('Member');
        $row = $user_model->checklogin($username,$password,$remeber);
        if($row){
            $this->success('登陆成功','Index/index');
        }else{
            $this->error('用户名或密码错误');
        }

    }
}