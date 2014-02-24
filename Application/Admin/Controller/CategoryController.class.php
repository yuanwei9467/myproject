<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-20
 * Time: 下午4:19
 */

namespace Admin\Controller;

use Think\Cache;

class CategoryController extends CommonController{

    public function index(){
        $cache = Cache::getInstance();
        if($categories = $cache->get('categories')){
            $list = $categories;
        }else{
            $category_model = D('category');
            $list = $category_model->getCategories();
            $cache->set('categories',$list);
        }
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 添加分类
     */
    public function add(){
        $name   = I('post.name');
        $pid    = I('post.pid');
        $category_model = D('Category');

        $data['pid'] = $pid;
        $data['name'] = $name;

        if($pid){
            $p_row = $category_model->find($pid);

            $data['path'] = $p_row['path'].'-'.$pid;
        }else{
            $data['path'] = '0';
        }
            $id = $category_model->saveCategory($data);
            if($id){
                $this->success('添加分类成功');
            }else{
                $this->error($category_model->getError());
            }

    }
}