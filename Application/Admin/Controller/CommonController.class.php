<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-20
 * Time: 下午4:46
 */

namespace Admin\Controller;

class CommonController extends \Think\Controller{
    public function _initialize(){
        $menu = $this->getMenus();
        $this->assign('__MENU__',$menu);
    }

    private function getMenus(){
        $menu_model = M('Menu');
        //查询一级菜单
        $main_menu = $menu_model->where(array('pid'=>0))->select();

        //查询当前的菜单的主菜单
        $map['url'] = array('like','%'.CONTROLLER_NAME.'/'.ACTION_NAME.'%');
        $current_nav = $menu_model->where($map)->find();
        if(empty($current_nav)){
            $this->error('url错误');
        }
        //查询当前菜单下的子菜单

        foreach($main_menu as $k=>$v){
            if($v['id'] == $current_nav['id'] || $v['id'] == $current_nav['id']){
                $main_menu[$k]['current'] = 'active';
                $child_list = $menu_model->where(array('pid'=>$v['id']))->select();
                break;
            }
        }
        return array('main'=>$main_menu,'child'=>$child_list);
    }
}