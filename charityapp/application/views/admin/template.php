<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Charity</title>
    <link href="<?php echo base_url();?>assets/back/css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">

    <!-- Bootstrap core CSS -->
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>

</head>

<body>
<!--
  Main sidebar seen on the left. may be static or collapsing depending on selected state.

    * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
    * Static - stays always open.
-->
<section>
<nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo hidden-xs">
            <a href="<?php echo site_url('user/index');?>">Charity</a>
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class="sidebar-status visible-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="thumb-sm avatar pull-right">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a5.jpg" alt="...">
                </span>
                <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                     should be used with bg-* and text-* classes for colors -->
                <span class="circle bg-warning fw-bold text-gray-dark">
                    13
                </span>
                &nbsp;
                Philip <strong>Smith</strong>
                <b class="caret"></b>
            </a>
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        <ul class="sidebar-nav">
            <li class="active">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#sidebar-dashboard" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-desktop"></i>
                    </span>
                    Dashboard
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-dashboard" class="collapse in">
                    <li class="active"><a href="<?php echo site_url('user/index');?>">Dashboard</a></li>
                    <!-- <li><a href="<?php echo site_url('user/widgets');?>">Widgets</a></li> -->
                </ul>
            </li>
            <!--part for admin anything add is here-->
            <?php 
                        $usertype = $this ->session->userdata("usergroup");

                        if($usertype == 'admin'){
                  ?>
            <!-- <li>
                <a href="<?php echo site_url('user/inbox');?>">">
                    <span class="icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    Email
                    <span class="label label-danger">
                        9
                    </span>
                </a>
            </li>
                       
            <li>
                <a href="<?php echo site_url('user/charts');?>">
                    <span class="icon">
                        <i class="glyphicon glyphicon-stats"></i>
                    </span>
                    Charts
                </a>
            </li>
             -->
        </ul>
        <!-- every .sidebar-nav may have a title -->
        <h5 class="sidebar-nav-title">Template <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
        <ul class="sidebar-nav">
            <li>
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <!-- <a class="collapsed" href="#sidebar-forms" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-align-right"></i>
                    </span>
                    Forms
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-forms" class="collapse">
                    <li><a href="<?php echo site_url('user/form_elements');?>">Form Elements</a></li>
                    <li><a href="<?php echo site_url('user/form_validation');?>">Form Validation</a></li>
                    <li><a href="<?php echo site_url('user/form_wizard');?>">Form Wizard</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-ui" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-tree-conifer"></i>
                    </span>
                    UI Elements
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-ui" class="collapse">
                    <li><a href="<?php echo site_url('user/ui_components');?>">Components</a></li>
                    <li><a href="<?php echo site_url('user/ui_notifications');?>">Notifications</a></li>
                    <li><a href="<?php echo site_url('user/ui_icons');?>">Icons</a></li>
                    <li><a href="<?php echo site_url('user/ui_buttons');?>">Buttons</a></li>
                    <li><a href="<?php echo site_url('user/ui_tabs_accordion');?>">Tabs & Accordion</a></li>
                    <li><a href="<?php echo site_url('user/ui_list_groups');?>">List Groups</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo site_url('user/grid');?>">
                    <span class="icon">
                        <i class="glyphicon glyphicon-th"></i>
                    </span>
                    Grid
                </a>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-maps" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-map-marker"></i>
                    </span>
                    Maps
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-maps" class="collapse">
                    
                    <li><a href="<?php echo site_url('user/maps_google');?>"> data-no-pjax>Google Maps</a></li>
                    <li><a href="<?php echo site_url('user/maps_vector');?>">Vector Maps</a></li>
                </ul>
            </li>
                        -->
            <?php 
                    }
                  ?>  
                  <!--end of admin -->

            <!--part for donor-->
            <?php 
                        $usertype = $this ->session->userdata("usergroup");

                        if($usertype == 'donor'){
                  ?>
            
            <li>
                <a href="<?php echo site_url('user/profile');?>">
                    <span class="icon">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    Profile
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('user/donate');?>">
                    <span class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
                    Donate
                </a>
            </li>
            <?php 
                    }
                  ?>  
            <!-- END OF part for donor-->

            <!-- start part for admin-->
            <?php 
                        $usertype = $this ->session->userdata("usergroup");

                        if($usertype == 'admin'){
                  ?>

            <li>
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                 <a class="collapsed" href="#sidebar-tables" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-table"></i>
                    </span>
                    View users
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-tables" class="collapse">
                    <li><a href="<?php echo site_url('user/view_user');?>">View users</a></li>
                    
                </ul>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-extra" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-leaf"></i>
                    </span>
                    Extra
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-extra" class="collapse">
                    <li><a href="<?php echo site_url('user/calendar');?>">Calendar</a></li>
                    <li><a href="<?php echo site_url('user/login');?>" target="_blank" data-no-pjax>Login Page</a></li>
                    <li><a href="<?php echo site_url('user/error');?>" target="_blank" data-no-pjax>Error Page</a></li>
                    <li><a href="<?php echo site_url('user/gallery');?>">Gallery</a></li>
                    <li><a href="<?php echo site_url('user/search');?>">Search Results</a></li>
                    <li><a href="<?php echo site_url('user/time_line');?>" data-no-pjax>Time Line</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-levels" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-folder-open"></i>
                    </span>
                    Menu Levels
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-levels" class="collapse">
                    <li><a href="#">Level 1</a></li>
                    <li>
                        <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels">
                            Level 2
                            <i class="toggle fa fa-angle-down"></i>
                        </a>
                        <ul id="sidebar-sub-levels" class="collapse">
                            <li><a href="#">Level 3</a></li>
                            <li><a href="#">Level 3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
        </ul>
        <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
       
        <ul class="sidebar-labels">
            <li>
                <a href="#">
                    
                    <i class="fa fa-circle text-warning mr-xs"></i>
                    <span class="label-name">My Recent</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle text-gray mr-xs"></i>
                    <span class="label-name">Starred</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle text-danger mr-xs"></i>
                    <span class="label-name">Background</span>
                </a>
            </li>
        </ul>
        <h5 class="sidebar-nav-title">Projects</h5>
        
        <div class="sidebar-alerts">
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Sales Report</span> <br>
                <div class="progress progress-xs mt-xs mb-0">
                    <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                </div>
                <small>Calculating x-axis bias... 65%</small>
            </div>
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                <div class="progress progress-xs mt-xs mb-0">
                    <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                </div>
                <small>Provide required notes</small>
            </div>
        </div>
                        -->
        <?php 
                    }
                  ?>  
    </div>
    
</nav>
<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
<nav class="page-controls navbar navbar-default">
    <div class="container-fluid">
        <!-- .navbar-header contains links seen on xs & sm screens -->
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li>
                    <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                    <a class="hidden-sm hidden-xs" id="nav-state-toggle" href="#" title="Turn on/off sidebar collapsing" data-placement="bottom">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                    <!-- shown on xs & sm screen. collapses and expands navigation -->
                    <a class="visible-sm visible-xs" id="nav-collapse-toggle" href="#" title="Show/hide sidebar" data-placement="bottom">
                        <span class="rounded rounded-lg bg-gray text-white visible-xs"><i class="fa fa-bars fa-lg"></i></span>
                        <i class="fa fa-bars fa-lg hidden-xs"></i>
                    </a>
                </li>
                <li class="ml-sm mr-n-xs hidden-xs"><a href="#"><i class="fa fa-refresh fa-lg"></i></a></li>
                <li class="ml-n-xs hidden-xs"><a href="#"><i class="fa fa-times fa-lg"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right visible-xs">
                <li>
                    <!-- toggles chat -->
                    <a href="#" data-toggle="chat-sidebar">
                        <span class="rounded rounded-lg bg-gray text-white"><i class="fa fa-globe fa-lg"></i></span>
                    </a>
                </li>
            </ul>
            <!-- xs & sm screen logo -->
            <a class="navbar-brand visible-xs" href="<?php echo site_url('user/index');?>">
                <i class="fa fa-circle text-gray mr-n-sm"></i>
                <i class="fa fa-circle text-warning"></i>
                &nbsp;
                Charity
                &nbsp;
                <i class="fa fa-circle text-warning mr-n-sm"></i>
                <i class="fa fa-circle text-gray"></i>
            </a>
        </div>

        <!-- this part is hidden for xs screens -->
        <div class="collapse navbar-collapse">
            <!-- search form! link it to your search server -->
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <div class="input-group input-group-no-border">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                        <input class="form-control" type="text" placeholder="Search Dashboard">
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle dropdown-toggle-notifications" id="notifications-dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar pull-left">
                            <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a5.jpg" alt="...">
                        </span>
                        &nbsp;
                        Philip <strong>Smith</strong>&nbsp;
                        <span class="circle bg-warning fw-bold">
                            13
                        </span>
                        <b class="caret"></b></a>
                    <!-- ready to use notifications dropdown.  inspired by smartadmin template.
                         consists of three components:
                         notifications, messages, progress. leave or add what's important for you.
                         uses Sing's ajax-load plugin for async content loading. See #load-notifications-btn -->
                    <div class="dropdown-menu animated fadeInUp" id="notifications-dropdown-menu">
                        <section class="panel notifications">
                            <header class="panel-heading">
                                <div class="text-align-center mb-sm">
                                    <strong>You have 13 notifications</strong>
                                </div>
                                <div class="btn-group btn-group-sm btn-group-justified" id="notifications-toggle" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the
                                             only requirement for async reloading -->
                                        <input type="radio" checked
                                               data-ajax-trigger="change"
                                               data-ajax-load="demo/ajax/notifications.html"
                                               data-ajax-target="#notifications-list"> Notifications
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio"
                                               data-ajax-trigger="change"
                                               data-ajax-load="demo/ajax/messages.html"
                                               data-ajax-target="#notifications-list"> Messages
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio"
                                               data-ajax-trigger="change"
                                               data-ajax-load="demo/ajax/progress.html"
                                               data-ajax-target="#notifications-list"> Progress
                                    </label>
                                </div>
                            </header>
                            <!-- notification list with .thin-scroll which styles scrollbar for webkit -->
                            <div id="notifications-list" class="list-group thin-scroll">
                                <div class="list-group-item">
                                <span class="thumb-sm pull-left mr clearfix">
                                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a3.jpg" alt="...">
                                </span>
                                    <p class="no-margin overflow-hidden">
                                        1 new user just signed up! Check out
                                        <a href="#">Monica Smith</a>'s account.
                                        <time class="help-block no-margin">
                                            2 mins ago
                                        </time>
                                    </p>
                                </div>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-left mr">
                                    <i class="glyphicon glyphicon-upload fa-lg"></i>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        2.1.0-pre-alpha just released. </p>
                                    <time class="help-block no-margin">
                                        5h ago
                                    </time>
                                </a>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-left mr">
                                    <i class="fa fa-bolt fa-lg"></i>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        Server load limited. </p>
                                    <time class="help-block no-margin">
                                        7h ago
                                    </time>
                                </a>
                                <div class="list-group-item">
                                <span class="thumb-sm pull-left mr clearfix">
                                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a5.jpg" alt="...">
                                </span>
                                    <p class="no-margin overflow-hidden">
                                        User <a href="#">Jeff</a> registered
                                        &nbsp;&nbsp;
                                        <button class="btn btn-xs btn-success">Allow</button>
                                        <button class="btn btn-xs btn-danger">Deny</button>
                                        <time class="help-block no-margin">
                                            12:18 AM
                                        </time>
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <span class="thumb-sm pull-left mr">
                                        <i class="fa fa-shield fa-lg"></i>
                                    </span>
                                    <p class="no-margin overflow-hidden">
                                        Instructions for changing your Envato Account password. Please
                                        check your account <a href="#">security page</a>.
                                        <time class="help-block no-margin">
                                            12:18 AM
                                        </time>
                                    </p>
                                </div>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-left mr">
                                    <span class="rounded bg-primary rounded-lg">
                                        <i class="fa fa-facebook text-white"></i>
                                    </span>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        New <strong>76</strong> facebook likes received.</p>
                                    <time class="help-block no-margin">
                                        15 Apr 2014
                                    </time>
                                </a>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-left mr">
                                    <span class="circle circle-lg bg-gray-dark">
                                        <i class="fa fa-circle-o text-white"></i>
                                    </span>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        Dark matter detected.</p>
                                    <time class="help-block no-margin">
                                        15 Apr 2014
                                    </time>
                                </a>
                            </div>
                            <footer class="panel-footer text-sm">
                                <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
                                     when clicked -->
                                <button class="btn btn-xs btn-link pull-right"
                                        id="load-notifications-btn"
                                        data-ajax-load="demo/ajax/notifications.php"
                                        data-ajax-target="#notifications-list"
                                        data-loading-text="<i class='fa fa-refresh fa-spin mr-xs'></i> Loading...">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <span class="fs-mini">Synced at: 21 Apr 2014 18:36</span>
                            </footer>
                        </section>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> &nbsp; My Account</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">Inbox &nbsp;&nbsp;<span class="badge bg-danger animated bounceIn">9</span></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('user/login');?>"><i class="fa fa-sign-out"></i> &nbsp; Log Out</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="chat-sidebar">
                        <i class="fa fa-globe fa-lg"></i>
                    </a>
                    <div id="chat-notification" class="chat-notification hide">
                        <div class="chat-notification-inner">
                            <h6 class="title">
                                <span class="thumb-xs">
                                    <img src="<?php echo base_url();?>assets/back/demo/img/people/a6.jpg" class="img-circle mr-xs pull-left">
                                </span>
                                Jess Smith
                            </h6>
                            <p class="text">Hey! What's up?</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="chat-sidebar" id="chat">
    <div class="chat-sidebar-content">
        <header class="chat-sidebar-header">
            <h4 class="chat-sidebar-title">Contacts</h4>
            <div class="form-group no-margin">
                <div class="input-group input-group-dark">
                    <input class="form-control fs-mini" id="chat-sidebar-search" type="text" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </header>
        <div class="chat-sidebar-contacts chat-sidebar-panel open">
            <h5 class="sidebar-nav-title">Today</h5>
            <div class="list-group chat-sidebar-user-group">
                <a class="list-group-item" href="#chat-sidebar-user-1">
                    <i class="fa fa-circle text-success pull-right"></i>
                    <span class="thumb-sm pull-left mr">
                        <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a2.jpg" alt="...">
                    </span>
                    <h5 class="message-sender">Chris Gray</h5>
                    <p class="message-preview">Hey! What's up? So many times since we</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-2">
                    <i class="fa fa-circle text-gray-light pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/img/avatar.png" alt="...">
                </span>
                    <h5 class="message-sender">Jamey Brownlow</h5>
                    <p class="message-preview">Good news coming tonight. Seems they agreed to proceed</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-3">
                    <i class="fa fa-circle text-danger pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a1.jpg" alt="...">
                </span>
                    <h5 class="message-sender">Livia Walsh</h5>
                    <p class="message-preview">Check out my latest email plz!</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-4">
                    <i class="fa fa-circle text-gray-light pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/img/avatar.png" alt="...">
                </span>
                    <h5 class="message-sender">Jaron Fitzroy</h5>
                    <p class="message-preview">What about summer break?</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-5">
                    <i class="fa fa-circle text-success pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a4.jpg" alt="...">
                </span>
                    <h5 class="message-sender">Mike Lewis</h5>
                    <p class="message-preview">Just ain't sure about the weekend now. 90% I'll make it.</p>
                </a>
            </div>
            <h5 class="sidebar-nav-title">Last Week</h5>
            <div class="list-group chat-sidebar-user-group">
                <a class="list-group-item" href="#chat-sidebar-user-6">
                    <i class="fa fa-circle text-gray-light pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a6.jpg" alt="...">
                </span>
                    <h5 class="message-sender">Freda Edison</h5>
                    <p class="message-preview">Hey what's up? Me and Monica going for a lunch somewhere. Wanna join?</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-7">
                    <i class="fa fa-circle text-success pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a5.jpg" alt="...">
                </span>
                    <h5 class="message-sender">Livia Walsh</h5>
                    <p class="message-preview">Check out my latest email plz!</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-8">
                    <i class="fa fa-circle text-warning pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a3.jpg" alt="...">
                </span>
                    <h5 class="message-sender">Jaron Fitzroy</h5>
                    <p class="message-preview">What about summer break?</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-9">
                    <i class="fa fa-circle text-gray-light pull-right"></i>
                <span class="thumb-sm pull-left mr">
                    <img class="img-circle" src="<?php echo base_url();?>assets/back/img/avatar.png" alt="...">
                </span>
                    <h5 class="message-sender">Mike Lewis</h5>
                    <p class="message-preview">Just ain't sure about the weekend now. 90% I'll make it.</p>
                </a>
            </div>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-1">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Chris Gray
                </a>
            </h5>
            <ul class="message-list">
                <li class="message">
                    <span class="thumb-sm">
                        <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a2.jpg" alt="...">
                    </span>
                    <div class="message-body">
                        Hey! What's up?
                    </div>
                </li>
                <li class="message">
                    <span class="thumb-sm">
                        <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a2.jpg" alt="...">
                    </span>
                    <div class="message-body">
                        Are you there?
                    </div>
                </li>
                <li class="message">
                    <span class="thumb-sm">
                        <img class="img-circle" src="<?php echo base_url();?>assets/back/demo/img/people/a2.jpg" alt="...">
                    </span>
                    <div class="message-body">
                        Let me know when you come back.
                    </div>
                </li>
                <li class="message from-me">
                    <span class="thumb-sm">
                        <img class="img-circle" src="<?php echo base_url();?>assets/back/img/avatar.png" alt="...">
                    </span>
                    <div class="message-body">
                        I am here!
                    </div>
                </li>
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-2">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Jamey Brownlow
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-3">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Livia Walsh
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-4">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Jaron Fitzroy
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-5">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Mike Lewis
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-6">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Freda Edison
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-7">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Livia Walsh
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-8">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Jaron Fitzroy
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-9">
            <h5 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Mike Lewis
                </a>
            </h5>
            <ul class="message-list">
            </ul>
        </div>
        <footer class="chat-sidebar-footer form-group">
            <input class="form-control input-dark fs-mini" id="chat-sidebar-input" type="text"  placeholder="Type your message">
        </footer>
    </div>
</div>
<!--sidebar end-->
<!--main content start-->
        <?php
        //echo $page; die();
             $this->load->view('admin/'.$page);
        //$this->load->view('templates/footer');

        ?>
<!--main content end-->

<!--footer start-->

<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->

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
<script src="<?php echo base_url();?>assets/back/vendor/pace.js/pace.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>


<!-- common app js -->
<script src="<?php echo base_url();?>assets/back/js/settings.js"></script>
<script src="<?php echo base_url();?>assets/back/js/app.js"></script>

<!-- calendar page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/core.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/widget.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/mouse.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/draggable.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/fullcalendar/fullcalendar.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/modal.js"></script>
<!-- calendar page specific js -->
<script src="<?php echo base_url();?>assets/back/js/calendar.js"></script>

<!-- charts page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/jquery.sparkline/dist/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/d3/d3.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/rickshaw/rickshaw.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/raphael/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/flot.animator/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/flot-orderBars/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/flot/jquery.flot.selection.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/flot/jquery.flot.time.js"></script>

<script src="<?php echo base_url();?>assets/back/vendor/nvd3/nv.d3.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/morris.js/morris.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<!-- charts page specific js -->
<script src="<?php echo base_url();?>assets/back/js/charts.js"></script>

<!-- compose page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap3-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap3-wysihtml5/src/bootstrap3-wysihtml5.js"></script>
<!-- compose page specific js -->
<script src="<?php echo base_url();?>assets/back/js/compose.js"></script>

<!-- form_elements page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/tooltip.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/modal.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-autosize/jquery.autosize.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap3-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap3-wysihtml5/src/bootstrap3-wysihtml5.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/switchery/dist/switchery.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jasny-bootstrap/js/inputmask.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jasny-bootstrap/js/fileinput.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/holderjs/holder.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/dropzone/downloads/dropzone.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/markdown/lib/markdown.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- form_elements page specific js -->
<script src="<?php echo base_url();?>assets/back/js/form-elements.js"></script>

<!-- form_validation page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/parsleyjs/dist/parsley.min.js"></script>
<!-- form_validation page specific js -->
<script src="<?php echo base_url();?>assets/back/js/form-validation.js"></script>

<!-- form_wizard page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/parsleyjs/dist/parsley.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/tab.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/select2/select2.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jasny-bootstrap/js/inputmask.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/modal.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/popover.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-application-wizard/src/bootstrap-wizard.js"></script>

<!-- form_wizard page specific js -->
<script src="<?php echo base_url();?>assets/back/js/form-wizard.js"></script>

<!-- gallery page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/shufflejs/dist/jquery.shuffle.modernizr.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- gallery page specific js -->
<script src="<?php echo base_url();?>assets/back/js/gallery.js"></script>

<!-- grid page specific libs -->.
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/modal.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/core.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/widget.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/mouse.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/sortable.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- grid page specific js -->
<script src="<?php echo base_url();?>assets/back/js/grid.js"></script>

<!-- index page specific libs -->
<script id="test" src="<?php echo base_url();?>assets/back/vendor/underscore/underscore.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery.sparkline/dist/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/d3/d3.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/rickshaw/rickshaw.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/raphael/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-Mapael/js/jquery.mapael.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-Mapael/js/maps/usa_states.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-Mapael/js/maps/world_countries.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/popover.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-calendar/bootstrap_calendar/js/bootstrap_calendar.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-animateNumber/jquery.animateNumber.min.js"></script>

<!-- index page specific js -->
<script src="<?php echo base_url();?>assets/back/js/index.js"></script>

<!-- invoice page specific js -->
<script src="<?php echo base_url();?>assets/back/js/invoice.js"></script>

<!-- maps_google page specific libs -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo base_url();?>assets/back/vendor/gmaps/gmaps.js"></script>

<!-- maps_google page specific js -->
<script src="<?php echo base_url();?>assets/back/js/gmap.js"></script>

<!-- maps_vector page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/jvectormap/jquery.jvectormap.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jvectormap-world/index.js"></script>

<!-- maps_vector page specific js -->
<script src="<?php echo base_url();?>assets/back/js/maps-vector.js"></script>

<!-- tables_basic page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/jquery.sparkline/dist/jquery.sparkline.js"></script>
<!-- tables_basic page specific js -->
<script src="<?php echo base_url();?>assets/back/js/tables-basic.js"></script>

<!-- page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/underscore/underscore-min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/backbone/backbone.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/backbone.paginator/lib/backbone.paginator.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/backgrid/lib/backgrid.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/backgrid-paginator/backgrid-paginator.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/datatables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-select/bootstrap-select.min.js"></script>

<!-- page specific js -->
<script src="<?php echo base_url();?>assets/back/js/tables-dynamic.js"></script>

<!-- time_line page specific libs -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo base_url();?>assets/back/vendor/gmaps/gmaps.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<!-- time_line page specific js -->
<script src="<?php echo base_url();?>assets/back/js/timeline.js"></script>

<!-- ui_buttons page specific js -->
<script src="<?php echo base_url();?>assets/back/js/ui-buttons.js"></script>

<!-- ui_components page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/popover.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/modal.js"></script>
<!-- ui_components page specific js -->
<script src="<?php echo base_url();?>assets/back/js/ui-components.js"></script>

<!-- ui_icons page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/tab.js"></script>

<!-- ui_list_groups page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/core.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/widget.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/mouse.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui/ui/sortable.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery.nestable/jquery.nestable.js"></script>

<!-- ui_list_groupspage specific js -->
<script src="<?php echo base_url();?>assets/back/js/ui-list-groups.js"></script>

<!-- ui_notificatins page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/underscore/underscore-min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/backbone/backbone.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/messenger/build/js/messenger.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/messenger/build/js/messenger-theme-flat.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/messenger/docs/welcome/javascripts/location-sel.js"></script>

<!-- ui_notificatins page specific js -->
<script src="<?php echo base_url();?>assets/back/js/ui-notifications.js"></script>

<!-- ui_tabs_accordion page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/tab.js"></script>

<!-- page specific libs -->
<script src="<?php echo base_url();?>assets/back/vendor/underscore/underscore.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jquery.sparkline/dist/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/d3/d3.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/rickshaw/rickshaw.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/raphael/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-Mapael/js/jquery.mapael.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-Mapael/js/maps/usa_states.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/jQuery-Mapael/js/maps/world_countries.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/MetroJS/release/MetroJs.Full/MetroJs.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/skycons/skycons.js"></script>

<!-- page specific js -->
<script src="<?php echo base_url();?>assets/back/demo/js/_fake-world-data.js"></script>
<script src="<?php echo base_url();?>assets/back/js/widgets.js"></script>

</body>
</html>