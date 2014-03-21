<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-18
 * Time: 下午2:13
 */

namespace Admin\Controller;
use Think\Controller;

class MemberController extends Controller{

       public function add(){
           $this->display('add');
       }

       public function save(){
            $User = D('Member');
            $row = $User->create();
            $row->username = I('post.username');
            $row->password = md5(I('post.password'));
            $row->email = I('post.email');
            if($User->add()){
                $this->success('保存成功');
            }else{
                $this->error($User->getError());
            }
       }
}