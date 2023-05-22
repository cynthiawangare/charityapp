<!DOCTYPE html>
<html>
<head>
    <title>Sing - Error</title>
    <link href="css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png">
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
<body class="error-page">

<div class="container">
    <main id="content" class="error-container" role="main">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">
                <div class="error-container">
                    <h1 class="error-code">Success</h1>
                    <p class="error-info">
                        Thank you for your donation!
                    </p>
                    
                </div>
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