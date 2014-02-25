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

            <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎您登录OneThink</title>
    <link rel="stylesheet" type="text/css" href="/myproject/Public/Admin/css/login.css" media="all">
    <link rel="stylesheet" type="text/css" href="/myproject/Public/Admin/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">
</head>
<body id="login-page">
<div id="main-content">

    <!-- 主体 -->
    <div class="login-body">
        <div class="login-main pr">
            <form action="<?php echo U('login');?>" method="post" class="login-form">
                <h3 class="welcome"><i class="login-logo"></i>OneThink管理平台</h3>
                <div id="itemBox" class="item-box">
                    <div class="item">
                        <i class="icon-login-user"></i>
                        <input type="text" name="username" placeholder="请填写用户名" autocomplete="off" />
                    </div>
                    <span class="placeholder_copy placeholder_un">请填写用户名</span>
                    <div class="item b0">
                        <i class="icon-login-pwd"></i>
                        <input type="password" name="password" placeholder="请填写密码" autocomplete="off" />
                    </div>
                    <span class="placeholder_copy placeholder_pwd">请填写密码</span>
                    <div class="item verifycode">
                        <i class="icon-login-verifycode"></i>
                        <input type="text" name="verify" placeholder="请填写验证码" autocomplete="off">
                        <a class="reloadverify" title="换一张" href="javascript:void(0)">换一张？</a>
                    </div>
                    <span class="placeholder_copy placeholder_check">请填写验证码</span>
                    <div>
                        <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('Public/verify');?>">
                    </div>
                </div>
                <div class="login_btn_panel">
                    <button class="login-btn" type="submit">
                        <span class="in"><i class="icon-loading"></i>登 录 中 ...</span>
                        <span class="on">登 录</span>
                    </button>
                    <div class="check-tips"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--[if lt IE 9]>
<script type="text/javascript" src="/myproject/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/myproject/Public/static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript">
    /* 登陆表单获取焦点变色 */
    $(".login-form").on("focus", "input", function(){
        $(this).closest('.item').addClass('focus');
    }).on("blur","input",function(){
        $(this).closest('.item').removeClass('focus');
    });

    //表单提交
    $(document)
            .ajaxStart(function(){
                $("button:submit").addClass("log-in").attr("disabled", true);
            })
            .ajaxStop(function(){
                $("button:submit").removeClass("log-in").attr("disabled", false);
            });

    $("form").submit(function(){
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

        function success(data){
            if(data.status){
                window.location.href = data.url;
            } else {
                self.find(".check-tips").text(data.info);
                //刷新验证码
                $(".reloadverify").click();
            }
        }
    });

    $(function(){
        //初始化选中用户名输入框
        $("#itemBox").find("input[name=username]").focus();
        //刷新验证码
        var verifyimg = $(".verifyimg").attr("src");
        $(".reloadverify").click(function(){
            if( verifyimg.indexOf('?')>0){
                $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });

        //placeholder兼容性
        //如果支持
        function isPlaceholer(){
            var input = document.createElement('input');
            return "placeholder" in input;
        }
        //如果不支持
        if(!isPlaceholer()){
            $(".placeholder_copy").css({
                display:'block'
            })
            $("#itemBox input").keydown(function(){
                $(this).parents(".item").next(".placeholder_copy").css({
                    display:'none'
                })
            })
            $("#itemBox input").blur(function(){
                if($(this).val()==""){
                    $(this).parents(".item").next(".placeholder_copy").css({
                        display:'block'
                    })
                }
            })


        }
    });
</script>
</body>
</html>


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