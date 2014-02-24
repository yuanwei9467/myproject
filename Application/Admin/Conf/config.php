<?php
/**
 * Created by yuanw.
 * User: yuanw
 * Date: 14-2-14
 * Time: 下午5:33
 */


return array(
    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
    ),
    /*模板布局配置*/
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',
);