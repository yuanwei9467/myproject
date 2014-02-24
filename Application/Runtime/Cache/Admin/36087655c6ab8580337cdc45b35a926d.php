<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/myproject/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/myproject/Public/Admin/css/css.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="./index.html" class="brand">Bootstrap</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="">
                        <a href="./index.html">首页</a>
                    </li>
                    <li class="">
                        <a href="">资讯管理</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container" style="width: 100%">
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav affix-top">
                <li class=""><a href="#typography">新闻列表</a></li>
                <li class=""><a href="<?php echo U('category/index');?>">分类管理</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>