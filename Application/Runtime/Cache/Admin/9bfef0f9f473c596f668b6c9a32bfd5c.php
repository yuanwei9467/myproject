<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->

    <link href="/myproject/Public/Admin/css/screen_preview.css" rel="stylesheet">
    <link href="/myproject/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/myproject/Public/Admin/css/style.css" rel="stylesheet">
    <link href="/myproject/Public/Admin/css/css.css" rel="stylesheet">
    <link href="/myproject/Public/Admin/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body>
<header class="navbar">
<div class="container">
<button data-target=".sidebar-nav.nav-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<a class="hidden-xs open" id="main-menu-toggle"><i class="fa fa-bars"></i></a>
<a href="index.html" class="navbar-brand col-lg-2 col-sm-1 col-xs-12"><span>SimpliQ</span></a>
<!-- start: Header Menu -->
<div class="nav-no-collapse header-nav">
<ul class="nav navbar-nav pull-right">
<li class="dropdown hidden-xs">
    <a href="index.html#" data-toggle="dropdown" class="btn dropdown-toggle">
        <i class="fa fa-warning"></i>
    </a>
    <ul class="dropdown-menu notifications">
        <li class="dropdown-menu-title">
            <span>You have 11 notifications</span>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon blue"><i class="fa fa-user"></i></span>
                <span class="message">New user registration</span>
                <span class="time">1 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">7 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">8 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">16 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon blue"><i class="fa fa-user"></i></span>
                <span class="message">New user registration</span>
                <span class="time">36 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon yellow"><i class="fa fa-shopping-cart"></i></span>
                <span class="message">2 items sold</span>
                <span class="time">1 hour</span>
            </a>
        </li>
        <li class="warning">
            <a href="index.html#">
                <span class="icon red"><i class="fa fa-user"></i></span>
                <span class="message">User deleted account</span>
                <span class="time">2 hour</span>
            </a>
        </li>
        <li class="warning">
            <a href="index.html#">
                <span class="icon red"><i class="fa fa-shopping-cart"></i></span>
                <span class="message">Transaction was canceled</span>
                <span class="time">6 hour</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">yesterday</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon blue"><i class="fa fa-user"></i></span>
                <span class="message">New user registration</span>
                <span class="time">yesterday</span>
            </a>
        </li>
        <li class="dropdown-menu-sub-footer">
            <a>View all notifications</a>
        </li>
    </ul>
</li>
<!-- start: Notifications Dropdown -->
<li class="dropdown hidden-xs">
    <a href="index.html#" data-toggle="dropdown" class="btn dropdown-toggle">
        <i class="fa fa-tasks"></i>
    </a>
    <ul class="dropdown-menu tasks">
        <li>
            <span class="dropdown-menu-title">You have 17 tasks in progress</span>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">iOS Development</span>
										<span class="percent">80%</span>
									</span>
                <div class="taskProgress progressSlim progressBlue ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80">80<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 80%;"></div></div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">Android Development</span>
										<span class="percent">47%</span>
									</span>
                <div class="taskProgress progressSlim progressYellow ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="47">47<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 47%;"></div></div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">Django Project For Google</span>
										<span class="percent">32%</span>
									</span>
                <div class="taskProgress progressSlim progressRed ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="32">32<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 32%;"></div></div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">SEO for new sites</span>
										<span class="percent">63%</span>
									</span>
                <div class="taskProgress progressSlim progressGreen ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="63">63<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 63%;"></div></div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">New blog posts</span>
										<span class="percent">80%</span>
									</span>
                <div class="taskProgress progressSlim progressPink ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80">80<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 80%;"></div></div>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all tasks</a>
        </li>
    </ul>
</li>
<!-- end: Notifications Dropdown -->
<!-- start: Message Dropdown -->
<li class="dropdown hidden-xs">
    <a href="index.html#" data-toggle="dropdown" class="btn dropdown-toggle">
        <i class="fa fa-envelope"></i>
    </a>
    <ul class="dropdown-menu messages">
        <li>
            <span class="dropdown-menu-title">You have 9 messages</span>
        </li>
        <li>
            <a href="index.html#">
                <span class="avatar"><img alt="Avatar" src="assets/img/avatar.jpg"></span>
									<span class="header">
										<span class="from">
									    	Łukasz Holeczek
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="avatar"><img alt="Avatar" src="assets/img/avatar2.jpg"></span>
									<span class="header">
										<span class="from">
									    	Megan Abott
									     </span>
										<span class="time">
									    	56 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="avatar"><img alt="Avatar" src="assets/img/avatar3.jpg"></span>
									<span class="header">
										<span class="from">
									    	Kate Ross
									     </span>
										<span class="time">
									    	3 hours
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="avatar"><img alt="Avatar" src="assets/img/avatar4.jpg"></span>
									<span class="header">
										<span class="from">
									    	Julie Blank
									     </span>
										<span class="time">
									    	yesterday
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="avatar"><img alt="Avatar" src="assets/img/avatar5.jpg"></span>
									<span class="header">
										<span class="from">
									    	Jane Sanders
									     </span>
										<span class="time">
									    	Jul 25, 2012
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all messages</a>
        </li>
    </ul>
</li>
<!-- end: Message Dropdown -->
<li>
    <a href="index.html#" class="btn">
        <i class="fa fa-wrench"></i>
    </a>
</li>
<!-- start: User Dropdown -->
<li class="dropdown">
    <a href="index.html#" data-toggle="dropdown" class="btn account dropdown-toggle">
        <div class="avatar"><img alt="Avatar" src="assets/img/avatar.jpg"></div>
        <div class="user">
            <span class="hello">Welcome!</span>
            <span class="name">Łukasz Holeczek</span>
        </div>
    </a>
    <ul class="dropdown-menu">
        <li class="dropdown-menu-title">

        </li>
        <li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="index.html#"><i class="fa fa-cog"></i> Settings</a></li>
        <li><a href="index.html#"><i class="fa fa-envelope"></i> Messages</a></li>
        <li><a href="login.html"><i class="fa fa-off"></i> Logout</a></li>
    </ul>
</li>
<!-- end: User Dropdown -->
</ul>
</div>
<!-- end: Header Menu -->

</div>
</header>
<div class="container">
    <div class="row">
        <div id="sidebar-left" class="col-lg-2 col-sm-1" style="min-height: 706px; display: block;">
            <input type="text" placeholder="..." class="search hidden-sm">
            <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="">
                        <a href="index.html"><i class="fa fa-bar-chart-o"></i>
                            <span class="hidden-sm"> 首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="gallery.html#" class="dropmenu">
                            <i class="fa fa-folder-o"></i>
                            <span class="hidden-sm"> 资讯管理</span>
                            </a>
                        <ul style="">
                            <li><a href="page-infrastructure.html" class="submenu"><i class="fa fa-hdd-o"></i><span class="hidden-sm"> 新闻列表</span></a></li>
                            <li><a href="page-inbox.html" class="submenu"><i class="fa fa-envelope"></i><span class="hidden-sm"> 分类管理</span></a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div id="content" class="col-lg-10 col-sm-11">

                <form role="form" action="<?php echo U(add);?>" method="post">
    <div class="row">
        <div class="col-lg-2"><h4 style="text-align: center;">添加分类</h4></div>

        <div class="col-lg-4">
            <div class="box">

                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="controls">
                                <select class="form-control" id="selectError3" name="pid">
                                    <option value="0">顶级分类</option>
                                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $str = count(explode('-',$vo['bpath'])); ?>
                                    <option value="<?php echo ($vo["id"]); ?>">
                                        |
                                        <?php $__FOR_START_20547__=0;$__FOR_END_20547__=$str;for($i=$__FOR_START_20547__;$i < $__FOR_END_20547__;$i+=1){ ?>——<?php } ?>
                                        <?php echo ($vo["name"]); ?>
                                    </option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="controls">
                <input type="text" value="请输入分类名称…" id="focusedInput" class="form-control focused" name="name">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">添加</button>
            </div>
        </div>
    </div>
    </form>

     <!--  分类列表 -->
    <div class="row">
    <div class="col-lg-12">
    <div class="box">
    <div data-original-title="" class="box-header">
        <h2><i class="fa fa-user"></i><span class="break"></span>Members</h2>
        <div class="box-icon">
            <a class="btn-setting" href="table.html#"><i class="fa fa-wrench"></i></a>
            <a class="btn-minimize" href="table.html#"><i class="fa fa-chevron-up"></i></a>
            <a class="btn-close" href="table.html#"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="box-content">
        <div role="grid" class="dataTables_wrapper form-inline" id="DataTables_Table_0_wrapper">

            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">ID</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 300px;" aria-label="Date registered: activate to sort column ascending">分类名称</th>

                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 224px;" aria-label="Actions: activate to sort column ascending">Actions</th>
            </tr>
            </thead>

            <tbody role="alert" aria-live="polite" aria-relevant="all">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="odd">
                    <td class="  sorting_1"><?php echo ($vo["id"]); ?></td>
                    <td class="center ">
                        |
                        <?php $str = count(explode('-',$vo['bpath'])); ?>
                        <?php $__FOR_START_18112__=0;$__FOR_END_18112__=$str;for($i=$__FOR_START_18112__;$i < $__FOR_END_18112__;$i+=1){ ?>——<?php } ?>
                        <?php echo ($vo["name"]); ?>
                    </td>

                    <td class="center ">
                        <a href="table.html#" class="btn btn-success">
                            <i class="fa fa-search-plus "></i>
                        </a>
                        <a href="" class="btn btn-info" alt="编辑">
                            <i class="fa fa-edit " alt="编辑"></i>
                        </a>
                        <a href="table.html#" class="btn btn-danger">
                            <i class="fa fa-trash-o "></i>
                        </a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
            <div class="row">
                <div class="col-lg-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div>
                <div class="col-lg-12 center"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div>
            </div>
        </div>
    </div>
    </div>
    </div><!--/col-->

    </div>



        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- start: JavaScript-->
<!--[if !IE]>-->

<script src="/myproject/Public/Admin/js/jquery-2.1.0.min.js"></script>

<!--<![endif]-->

<!--[if IE]>

<script src="/myproject/Public/Admin/js/jquery-1.11.0.min.js"></script>

<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
</script>

<![endif]-->
<script src="/myproject/Public/Admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/myproject/Public/Admin/js/bootstrap.min.js"></script>




<!-- page scripts -->
<script src="/myproject/Public/Admin/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.ui.touch-punch.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.sparkline.min.js"></script>
<script src="/myproject/Public/Admin/js/fullcalendar.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/myproject/Public/Admin/js/excanvas.min.js"></script><![endif]-->
<script src="/myproject/Public/Admin/js/jquery.flot.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.flot.pie.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.flot.stack.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.flot.resize.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.flot.time.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.autosize.min.js"></script>
<script src="/myproject/Public/Admin/js/jquery.placeholder.min.js"></script>

<!-- theme scripts -->
<script src="/myproject/Public/Admin/js/custom.min.js"></script>
<script src="/myproject/Public/Admin/js/core.min.js"></script>

<!-- inline scripts related to this page -->
<script src="/myproject/Public/Admin/js/pages/index.js"></script>

<!-- end: JavaScript-->
</body>
</html>