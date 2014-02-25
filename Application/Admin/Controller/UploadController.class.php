<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-25
 * Time: 下午4:33
 */
namespace Admin\Controller;

class UploadController extends \Think\Controller{

       public function index(){
           $this->display();
       }

       public function upload(){
           $configs = array(
               ''
           )
           $upload = new \Think\Upload();

           if(!$upload->upload()) {// 上传错误提示错误信息
               $this->error($upload->getError());
           }else{// 上传成功
               $this->success('上传成功！');
           }
       }

}
