<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Dashboard - Metro King</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!-- Stylesheets -->
    <link href="/myproject/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/font-awesome.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/jquery-ui.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/fullcalendar.css">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/prettyPhoto.css">
    <!-- Star rating -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/rateit.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/bootstrap-datetimepicker.css">
    <!-- jQuery Gritter -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/jquery.css">
    <!-- CLEditor -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/jquery_002.css">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="/myproject/Public/Admin/css/bootstrap-switch.css">
    <!-- Main stylesheet -->
    <link href="/myproject/Public/Admin/css/style.css" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="/myproject/Public/Admin/css/widgets.css" rel="stylesheet">



    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->

    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>


<!-- JS -->
<script src="/myproject/Public/Admin/js/jquery.js"></script> <!-- jQuery -->
<script src="/myproject/Public/Admin/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/myproject/Public/Admin/js/jquery-ui-1.js"></script> <!-- jQuery UI -->
<script src="/myproject/Public/Admin/js/fullcalendar.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/myproject/Public/Admin/js/jquery_003.js"></script> <!-- RateIt - Star rating -->
<script src="/myproject/Public/Admin/js/jquery_006.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="/myproject/Public/Admin/js/excanvas.js"></script>
<script src="/myproject/Public/Admin/js/jquery_005.js"></script>
<script src="/myproject/Public/Admin/js/jquery_009.js"></script>
<script src="/myproject/Public/Admin/js/jquery_007.js"></script>
<script src="/myproject/Public/Admin/js/jquery_002.js"></script>

<script src="/myproject/Public/Admin/js/jquery_004.js"></script> <!-- jQuery Gritter -->
<script src="/myproject/Public/Admin/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/myproject/Public/Admin/js/jquery_008.js"></script> <!-- CLEditor -->
<script src="/myproject/Public/Admin/js/bootstrap-datetimepicker.js"></script> <!-- Date picker -->
<script src="/myproject/Public/Admin/js/bootstrap-switch.js"></script> <!-- Bootstrap Toggle -->
<script src="/myproject/Public/Admin/js/filter.js"></script> <!-- Filter for support page -->
<script src="/myproject/Public/Admin/js/custom.js"></script> <!-- Custom codes -->
<script src="/myproject/Public/Admin/js/charts.js"></script> <!-- Custom chart codes -->



<body style="right: -252px;">

<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">

    <div class="containerk">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand">Metro <span class="bold">King</span></a>
        </div>
        <!-- Site name for smallar screens -->


        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">



            <!-- Links -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img src="__IMAGES__/user.jpg" alt="" class="nav-user-pic img-responsive"> Admin <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
                        <li><a href=""><i class="icon-off"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>

            <!-- Notifications -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Comment button with number of latest comments count -->
                <li class="dropdown dropdown-big">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon-comments"></i> Chats <span class="badge badge-info">6</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- Heading - h5 -->
                            <h5><i class="icon-comments"></i> Chats</h5>
                            <!-- Use hr tag to add border -->
                            <hr>
                        </li>
                        <li>
                            <!-- List item heading h6 -->
                            <a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span>
                            <div class="clearfix"></div>
                            <hr>
                        </li>
                        <li>
                            <a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span>
                            <div class="clearfix"></div>
                            <hr>
                        </li>
                        <li>
                            <a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span>
                            <div class="clearfix"></div>
                            <hr>
                        </li>
                        <li>
                            <div class="drop-foot">
                                <a href="#">View All</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Message button with number of latest messages count-->
                <li class="dropdown dropdown-big">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon-envelope-alt"></i> Inbox <span class="badge badge-important">6</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- Heading - h5 -->
                            <h5><i class="icon-envelope-alt"></i> Messages</h5>
                            <!-- Use hr tag to add border -->
                            <hr>
                        </li>
                        <li>
                            <!-- List item heading h6 -->
                            <a href="#">Hello how are you?</a>
                            <!-- List item para -->
                            <p>Quisque eu consectetur erat eget  semper...</p>
                            <hr>
                        </li>
                        <li>
                            <a href="#">Today is wonderful?</a>
                            <p>Quisque eu consectetur erat eget  semper...</p>
                            <hr>
                        </li>
                        <li>
                            <div class="drop-foot">
                                <a href="#">View All</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Members button with number of latest members count -->
                <li class="dropdown dropdown-big">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon-user"></i> Users <span class="badge badge-success">6</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- Heading - h5 -->
                            <h5><i class="icon-user"></i> Users</h5>
                            <!-- Use hr tag to add border -->
                            <hr>
                        </li>
                        <li>
                            <!-- List item heading h6-->
                            <a href="#">Ravi Kumar</a> <span class="label label-warning pull-right">Free</span>
                            <div class="clearfix"></div>
                            <hr>
                        </li>
                        <li>
                            <a href="#">Balaji</a> <span class="label label-important pull-right">Premium</span>
                            <div class="clearfix"></div>
                            <hr>
                        </li>
                        <li>
                            <a href="#">Kumarasamy</a> <span class="label label-warning pull-right">Free</span>
                            <div class="clearfix"></div>
                            <hr>
                        </li>
                        <li>
                            <div class="drop-foot">
                                <a href="#">View All</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>




<!-- Main content starts -->

<div class="content">

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">



        <!-- Search form -->
        <div class="sidebar-widget">
            <form>
                <input class="form-control" placeholder="Search" type="text">
            </form>
        </div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">

            <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

            <li class="nred current"><a href="#"><i class="icon-desktop"></i> Dashboard</a></li>

            <!-- Menu with sub menu -->
            <li class="has_submenu nlightblue">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="icon-th"></i> 流程管理
                    <!-- Icon for dropdown -->
                    <span class="pull-right"><i class="icon-angle-right"></i></span>
                </a>

                <ul style="display: none;">
                    <li><a href="<?php echo U('Process/add');?>">新增流程</a></li>
                    <li><a href="">Widgets #2</a></li>
                </ul>
            </li>

            <li class="has_submenu ngreen">
                <a href="#"><i class="icon-bar-chart"></i> 事件管理(用户)
                    <span class="pull-right"><i class="icon-angle-right"></i></span>
                </a>
                <ul style="display: none;">
                    <li><a href="<?php echo U('Flowork/step1');?>">新增意见</a></li>
                    <li><a href="">Widgets #2</a></li>
                </ul>
            </li>



            <li class="has_submenu nviolet">
                <a href="#">
                    <i class="icon-file-alt"></i> 用户管理
                    <span class="pull-right"><i class="icon-angle-right"></i></span>
                </a>

                <ul style="display: none;">
                    <li><a href="<?php echo U('Memeber/list');?>">用户列表</a></li>
                    <li><a href="<?php echo U('Member/add');?>">新增用户</a></li>

                </ul>
            </li>

            <li class="has_submenu nblue">
                <a href="#">
                    <i class="icon-file-alt"></i> Pages #2
                    <span class="pull-right"><i class="icon-angle-right"></i></span>
                </a>

                <ul style="">
                    <li><a href="">Error</a></li>
                    <li><a href="http://responsivewebinc.com/premium/metroking/gallery.html">Gallery</a></li>
                    <li><a href="http://responsivewebinc.com/premium/metroking/grid.html">Grid</a></li>
                    <li><a href="http://responsivewebinc.com/premium/metroking/invoice.html">Invoice</a></li>
                    <li><a href="http://responsivewebinc.com/premium/metroking/media.html">Media</a></li>
                    <li><a href="http://responsivewebinc.com/premium/metroking/profile.html">Profile</a></li>
                </ul>
            </li>

            <li class="nred"><a href="http://responsivewebinc.com/premium/metroking/forms.html"><i class="icon-list"></i> Forms</a></li>

            <li class="nlightblue"><a href="http://responsivewebinc.com/premium/metroking/tables.html"><i class="icon-table"></i> Tables</a></li>

        </ul>




        <!-- Date -->

        <div class="sidebar-widget">
            <div class="hasDatepicker" id="todaydate"><div style="display: block;" class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2014</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default" href="#">27</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="1" data-year="2014"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">28</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
        </div>



    </div>

</div>

<!-- Sidebar ends -->
<div class="mainbar">
    <div class="matter">
        <div class="container">
            <div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="widget wlightblue">
                <div class="widget-head">
                    <div class="pull-left">新增流程</div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="alert">

            </div>

            <div class="box-content">
                <form role="form" class="form-horizontal" method="post" action="<?php echo U('add');?>">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">流程名称</label>
                        <div class="col-sm-4">
                            <input type="text" name="name"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-info">新增</button>
                        </div>

                    </div>


                </form>

                <style>
                    .fileinput-button input {
                        cursor: pointer;
                        direction: ltr;
                        font-size: 200px;
                        margin: 0;
                        opacity: 0;
                        position: absolute;
                        right: 0;
                        top: 0;
                    }
                </style>



            </div>



        </div>



    </div>
</div>





        </div>
    </div>

</div>

<div class="clearfix"></div>

</div>
<!-- Content ends -->


<!-- Notification box starts -->
<div style="display: none;" class="slide-box">

    <!-- Notification box head -->
    <div class="slide-box-head bred">
        <!-- Title -->
        <div class="pull-left">Notification Box</div>
        <!-- Icon -->
        <div class="slide-icons pull-right">
            <a href="#" class="sminimize"><i class="icon-chevron-down"></i></a>
            <a href="#" class="sclose"><i class="icon-remove"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="slide-content">

        <!-- It is default bootstrap nav tabs. See official bootstrap doc for doubts -->
        <ul class="nav nav-tabs">
            <!-- Tab links -->
            <li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-bar-chart"></i></a></li>
            <li><a href="#tab2" data-toggle="tab"><i class="icon-phone"></i></a></li>
            <li><a href="#tab3" data-toggle="tab"><i class="icon-comments"></i></a></li>
        </ul>

        <!-- Tab content -->

        <div class="tab-content">

            <div class="tab-pane active" id="tab1">

                <!-- Graph #1 -->
                <div class="slide-data">
                    <div class="slide-data-text">Today Earnings</div>
                    <div class="slide-data-result">$5,0000 <i class="icon-arrow-up red"></i> </div>
                    <div class="clearfix"></div>
                    <hr>
                    <span id="todayspark4" class="spark"><canvas height="60" width="230" style="display: inline-block; width: 230px; height: 60px; vertical-align: top;"></canvas></span>
                </div>

                <!-- Graph #2 -->
                <div class="slide-data">
                    <div class="slide-data-text">Yesterday Earnings</div>
                    <div class="slide-data-result">$4,6000 <i class="icon-arrow-down green"></i> </div>
                    <div class="clearfix"></div>
                    <hr>
                    <span id="todayspark5" class="spark"><canvas height="60" width="230" style="display: inline-block; width: 230px; height: 60px; vertical-align: top;"></canvas></span>
                </div>

            </div>

            <div class="tab-pane" id="tab2">
                <h5>Have some content here.</h5>
                <p>Aliquam dui libero, pharetra nec venenatis in,
                    scelerisque quis odio. In hac habitasse platea dictumst. Etiam porta
                    placerat turpis, eget fermentum neque egestas at. Vestibulum
                    ullamcorper, augue a sollicitudin vestibulum, orci purus semper felis,
                    lobortis consequat nisi nunc eu enim. </p>
            </div>

            <div class="tab-pane" id="tab3">
                <h5>Have some content here.</h5>
                <p>Aliquam dui libero, pharetra nec venenatis in,
                    scelerisque quis odio. In hac habitasse platea dictumst. Etiam porta
                    placerat turpis, eget fermentum neque egestas at. Vestibulum
                    ullamcorper, augue a sollicitudin vestibulum, orci purus semper felis,
                    lobortis consequat nisi nunc eu enim.</p>
            </div>

        </div>

    </div>

</div>

<!-- Notification box ends -->

<!-- Scroll to top -->
<span style="display: none;" class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>



<!-- Script for this page -->
<script type="text/javascript">
    $(function () {

        /* Bar Chart starts */

        var d1 = [];
        for (var i = 0; i <= 30; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 30; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);


        var stack = 0, bars = true, lines = false, steps = false;

        function plotWithOptions() {
            $.plot($("#bar-chart"), [ d1, d2 ], {
                series: {
                    stack: stack,
                    lines: { show: lines, fill: true, steps: steps },
                    bars: { show: bars, barWidth: 0.8 }
                },
                grid: {
                    borderWidth: 0, hoverable: true, color: "#777"
                },
                colors: ["#52b9e9", "#0aa4eb"],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
                }
            });
        }

        plotWithOptions();

        $(".stackControls input").click(function (e) {
            e.preventDefault();
            stack = $(this).val() == "With stacking" ? true : null;
            plotWithOptions();
        });
        $(".graphControls input").click(function (e) {
            e.preventDefault();
            bars = $(this).val().indexOf("Bars") != -1;
            lines = $(this).val().indexOf("Lines") != -1;
            steps = $(this).val().indexOf("steps") != -1;
            plotWithOptions();
        });

        /* Bar chart ends */

    });


    /* Curve chart starts */

    $(function () {
        var sin = [], cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        var plot = $.plot($("#curve-chart"),
                [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                    series: {
                        lines: { show: true,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 0.05
                                }, {
                                    opacity: 0.01
                                }]
                            }
                        },
                        points: { show: true }
                    },
                    grid: { hoverable: true, clickable: true, borderWidth:0 },
                    yaxis: { min: -1.2, max: 1.2 },
                    colors: ["#fa3031", "#43c83c"]
                });


        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y + 5,
                width: 100,
                left: x + 5,
                border: '1px solid #000',
                padding: '2px 8px',
                color: '#ccc',
                'background-color': '#000',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#curve-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

        $("#curve-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });

    });

    /* Curve chart ends */
</script>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>