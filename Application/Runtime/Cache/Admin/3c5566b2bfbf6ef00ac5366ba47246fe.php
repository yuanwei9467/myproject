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

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->

    </head>


<!-- JS -->
<script src="/myproject/Public/Admin/js/jquery.js"></script> <!-- jQuery -->








<body style="">





<div class="container">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?php if($remeber == 1): ?><a href="<?php echo U('Index/index');?>"><button class="btn btn-primary btn-lg btn-block" type="button">进入网站</button></a>
        <?php else: ?>
            <form role="form" class="form-signin" method="post" action="<?php echo U('Public/checklogin');?>">
                <h2 class="form-signin-heading">Please sign in</h2>
                <div class="form-group">
                    <label class="control-label">用户名</label>
                    <input type="text" autofocus="" required="" placeholder="" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label class="control-label">密码</label>
                    <input type="password" required="" placeholder="Password" class="form-control" name="password">
                </div>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" name="remeber"> Remember me
                </label>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
            </form><?php endif; ?>

    </div>
</div>


</div>






</body></html>