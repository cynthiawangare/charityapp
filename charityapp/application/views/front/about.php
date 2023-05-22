<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Charity</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?php echo base_url();?>assets/front/images/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/front/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/front/lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="<?php echo site_url('welcome/index');?>" class="navbar-brand">Charity</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="<?php echo site_url('welcome/index');?>" class="nav-item nav-link">Home</a>
                        <a href="<?php echo site_url('welcome/about');?>" class="nav-item nav-link active">About</a>
                        
                        <a href="<?php echo site_url('user/login');?>" class="nav-item nav-link">login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo site_url('welcome/index');?>">Home</a>
                        <a href="<?php echo site_url('welcome/about');?>">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/front/images/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Worldwide non-profit charity organization</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                To inspire breakthroughs in the way the world treats children and to achieve immediate and lasting change in their lives.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                To honor and empower wounded warriors.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                Your values are the guiding principles for which you stand. They are the ideals you refuse to compromise as you conduct your mission in pursuit of your vision.

Nonprofit organizational values are the highest values that guide your organization’s actions, unite your employees, and define your brand.

They are ideally set as part of strategic planning when an organization is just being set up (alongside mission and vision statements).
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/front/images/team-1.jpgimg/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <div class="section-header">
                        <h2>What we can achieve with your help</h2>
                    </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-text" data-toggle="counter-up">100</h3>
                                <p>Countries reached</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">100,000</h3>
                                <p>Money that can be raised</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-text" data-toggle="counter-up">5000</h3>
                                <p>People helped</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>46, woodvale street, Nairobi, Kenya </p>
                            <p><i class="fa fa-phone-alt"></i>0700449883</p>
                            <p><i class="fa fa-envelope"></i>cynthiandirangu@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="<?php echo site_url('welcome/about');?>">About Us</a>
                            <a href="<?php echo site_url('user/login');?>">login</a>
                            <a href="<?php echo site_url('welcome/causes');?>">Popular Causes</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                    <p>&copy; <a href="#">Charity</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                    <p>Designed By Cynthia and Company</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/front/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url();?>assets/front/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/front/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/front/lib/counterup/counterup.min.js"></script>
        <script src="<?php echo base_url();?>assets/front/lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?php echo base_url();?>assets/front/mail/jqBootstrapValidation.min.js"></script>
        <script src="<?php echo base_url();?>assets/front/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url();?>assets/front/js/main.js"></script>
    </body>
</html>
