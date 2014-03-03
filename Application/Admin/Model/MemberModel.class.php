<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-3
 * Time: 下午5:33
 */

namespace Admin\Model;
class MemberModel extends \Think\Model{


    public function checklogin($username,$password,$remeber = ''){

        if($row = $this->where(array('username'=>$username,'password'=>md5($password)))->find()){
            if($remeber){
                cookie('username',$username);
            }
            session('username',$username);
            $row->last_login_time = time();
            $row->last_login_ip = get_client_ip();
            $row->login_time = time();
            $this->save($row);
            return true;
        }else{
            return false;
        }
    }
}