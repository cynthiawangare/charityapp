<!DOCTYPE html>
<html>
<head>
    <title>Charity</title>
    <link href="<?php echo base_url();?>assets/back/css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body class="login-page">

<div class="container">
    <main id="content" class="widget-login-container" role="main">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">
                <h4 class="widget-login-logo animated fadeInUp">
                    <i class="fa fa-circle text-gray"></i>
                    Charity app
                    <i class="fa fa-circle text-warning"></i>
                </h4>
                <section class="widget widget-login animated fadeInUp">
                    <header>
                        <h3>Login to your Charity App</h3>
                    </header>
                    <div class="widget-body">
                        <p class="widget-login-info">
                            Use Facebook, Twitter or your email to sign in.
                        </p>
                        <p class="widget-login-info">
                            Don't have an account? Sign up now!
                        </p>
                        <form class="login-form mt-lg" action="<?php echo site_url('user/signin');?>" method="post">
                            <div class="form-group">
                            <?php 
$incorrect = $this->session->flashdata('incorrect');
 if($incorrect==1)
  {?>
<p  style="font-size: 13px; color: orange;">Wrong Username / Password. Try again !</p>
  <?php }
                             ?>
                            <div class="login-wrap">
                                <input type="text" class="form-control" name="username" placeholder="user name" autofocus>
                            </div>
                            <div class="login-wrap">
                                <input class="form-control" id="pswd" type="text" name="password" placeholder="Password">
                            </div>
                            <div class="clearfix">
                                <div class="btn-toolbar pull-right">                                    
                                    <input type="submit" class="btn btn-default btn-sm" value="login">
                                    <a class="btn btn-inverse btn-sm" href="<?php echo site_url('user/registration');?>">Create an account</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-push-6">
                                    <div class="clearfix">
                                        <div class="checkbox widget-login-info pull-right ml-n-lg">
                                            <input type="checkbox" id="checkbox1" value="1">
                                            <label for="checkbox1">Keep me signed in </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-sm-pull-6">
                                    <a class="mr-n-lg" href="#">Trouble with account?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

<!-- common libraries. required for every page-->
<script src="<?php echo base_url();?>assets/back/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-pjax/jquery.pjax.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/transition.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/collapse.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/dropdown.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/button.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/tooltip.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/alert.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/widgster/widgster.js"></script>

<!-- common app js -->
<script src="<?php echo base_url();?>assets/back/js/settings.js"></script>
<script src="<?php echo base_url();?>assets/back/js/app.js"></script>

<!-- page specific libs -->
<!-- page specific js -->
</body>
</html>