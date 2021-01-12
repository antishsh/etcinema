<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>publicassets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Etcinema - Online Ticket Booking Website</title>


</head>

<body>

    <!-- ==========Preloader========== -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php echo base_url() ?>publicpages">
                        <img src="<?php echo base_url() ?>publicassets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="<?php echo base_url() ?>publicpages" <?php if ($this->uri->segment(2) === null) {
                                                                            echo 'class="active"';
                                                                        } ?>>Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>publicpages/movie" <?php if ($this->uri->segment(2) === 'movie') {
                                                                                echo 'class="active"';
                                                                            } ?>>movies</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>publicpages/about" <?php if ($this->uri->segment(2) === 'about') {
                                                                                echo 'class="active"';
                                                                            } ?>>About Us</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>publicpages/contact" <?php if ($this->uri->segment(2) === 'contact') {
                                                                                    echo 'class="active"';
                                                                                } ?>>contact</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>login/change_password" <?php if ($this->uri->segment(2) === 'change_password') {
                                                                                    echo 'class="active"';
                                                                                } ?>>Change pasword</a>
                    </li>

                    <?php if ($this->session->userdata('logged_in') == true) : ?>
                        <li class="header-button pr-0">
                            <a href="<?php echo base_url() ?>login/customer_logout">Logout</a>
                        </li>
                        <li>
                            <p class="cast">Welcome <?= $this->session->userdata('username'); ?></p>
                        </li>
                    <?php else : ?>
                        <li class="header-button pr-0">
                            <a href="<?php echo base_url() ?>login/customer_signin">Sign In</a>
                        </li>
                        <li class="header-button pr-0">
                            <a href="<?php echo base_url() ?>login/customer_signup">join us</a>
                        </li>
                    <?Php endif; ?>

                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- ==========Header-Section========== -->