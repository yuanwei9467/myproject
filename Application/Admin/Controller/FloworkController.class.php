<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-3-4
 * Time: 上午11:42
 */

class FloworkController extends \Think\Controller{

    /**
     * 显示新增时间页面
     */
    public function step1(){
        $list = M('Process')->select();
        $this->assign('list',$list);
        $this->display();
    }

}