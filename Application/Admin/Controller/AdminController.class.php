<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-21
 * Time: 下午5:13
 */
namespace Admin\Controller;
class AdminController extends \Think\Controller{
    public function _initialize(){
        $session_user = session('user');

        if(empty($session_user['id'])){
            $this->redirect('Public/login');
        }

    }
}