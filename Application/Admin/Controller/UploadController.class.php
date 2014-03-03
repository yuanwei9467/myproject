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

           $upload = new \Think\Upload();

           if(!$data = $upload->upload()) {// 上传错误提示错误信息
               echo $upload->getError();
               exit;
           }else{// 上传成功
               $attachemt_model = D('Attachments');
               $row = $attachemt_model->saveFiles($data['files']);
               if($row){
                   echo json_encode($row);
                   exit;
               }else{

               }

           }
       }

}
