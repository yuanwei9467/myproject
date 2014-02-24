<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-19
 * Time: 上午11:05
 */
namespace Admin\Behaviors;
use Think\Behavior;

class testBehavior extends Behavior{

    public function run(&$params){
        echo 'abc';
    }

}