<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Ethcinema Admin</title>
  <!-- loader-->
  <!-- <link href="<?php echo base_url() ?>assets/css/pace.min.css" rel="stylesheet"/>
  <script src="<?php echo base_url() ?>assets/js/pace.min.js"></script> -->
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url() ?>assets/images/logo-icon.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="<?php echo base_url() ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url() ?>assets/css/sidebar-menu.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/foopicker.css">
  <!-- Custom Style-->
  <link href="<?php echo base_url() ?>assets/css/app-style.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dataTables/dataTables.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/seat.css" />
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/foopicker.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<?php if ($this->session->tempdata('role') == 'admin') {
  echo '<body class="bg-theme bg-theme1"> ';
} elseif ($this->session->tempdata('role') == 'staff') {
  echo '<body class="bg-theme bg-theme2"> ';
} elseif ($this->session->tempdata('role') == 'manager') {
  echo '<body class="bg-theme bg-theme3"> ';
} elseif ($this->session->tempdata('customer') == 'yes') {
  echo '<body class="bg-theme bg-theme5"> ';
}; ?>



<!-- Start wrapper-->
<div id="wrapper">
  <?php if ($this->session->tempdata('role') == 'admin') {
  ?>
    <!--admin templet-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="<?php echo base_url() ?>admin_dashboard">
          <img src="<?php echo base_url() ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Etcinema Admin</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url() ?>admin_dashboard">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <!-- <li>
          <a href="<?php echo base_url() ?>admin_showtime">
            <i class="zmdi zmdi-account-calendar"></i> <span>Showtime</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>admin_movies">
            <i class="zmdi zmdi-play-circle"></i> <span>Movies</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>admin_cinemas">
            <i class="zmdi zmdi zmdi-home"></i> <span>Cinema</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>admin_Ratings">
            <i class="zmdi zmdi-sort-amount-asc"></i> <span>Ratings</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>admin_geners">
            <i class="zmdi zmdi-grid"></i> <span>Geners</span>
          </a>
        </li> -->

        <li>
          <a href="<?php echo base_url() ?>admin_users">
            <i class="zmdi zmdi-account-box"></i> <span>Users</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>admin_customer">
            <i class="zmdi zmdi zmdi-account"></i> <span>Customer</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>admin_bookings">
            <i class="zmdi zmdi-assignment"></i></i> <span>Bookings</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>admin_reports">
            <i class="zmdi zmdi-file-text"></i></i> <span>Reports</span>
          </a>
        </li>

      </ul>

    </div>
  <?php
  } elseif ($this->session->tempdata('role') == 'staff') { ?>
    <!--staff templet-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="<?php echo base_url() ?>staff_dashboard">
          <img src="<?php echo base_url() ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Etcinema Staff</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url() ?>staff_dashboard">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>staff_showtime">
            <i class="zmdi zmdi-account-calendar"></i> <span>Showtime</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>staff_movies">
            <i class="zmdi zmdi-movie"></i> <span>Movies</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>staff_Customer">
            <i class="zmdi zmdi zmdi-account"></i> <span>Customer</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>staff_seat">
            <i class="zmdi zmdi-seat"></i> <span>Seat</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>staff_cinemas">
            <i class="zmdi zmdi zmdi-home"></i> <span>Cinema</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>staff_Ratings">
            <i class="zmdi zmdi-sort-amount-asc"></i> <span>Ratings</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>staff_geners">
            <i class="zmdi zmdi-grid"></i> <span>Geners</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>staff_advert">
            <i class="zmdi zmdi-notifications-active"></i> <span>Advert</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>staff_profile">
          <i class="zmdi zmdi zmdi-account"></i> <span>Profile</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>staff_check">
            <i class="zmdi zmdi-notifications-active"></i> <span>Check Ticket</span>
          </a>
        </li>
      </ul>

    </div>
  <?php
  } elseif ($this->session->tempdata('customer') == 'yes') { ?>
    <!--staff templet-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="<?php echo base_url() ?>user_dashboard">
          <img src="<?php echo base_url() ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Ethcinema User</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url() ?>user_dashboard">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>user_booking">
            <i class="zmdi zmdi-account-calendar"></i> <span>My Bookings</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>user_profile">
            <i class="zmdi zmdi zmdi-account"></i> <span>Profile</span>
          </a>
        </li>





      </ul>

    </div>
  <?php } ?>


  <!--Start sidebar-wrapper-->

  <!--End sidebar-wrapper-->


  <header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
      <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link toggle-menu" href="javascript:void();">
            <i class="icon-menu menu-icon"></i>
          </a>
        </li>
        <?php if ($this->session->tempdata('role') == 'admin' || $this->session->tempdata('role') == 'staff') {
        ?>
          <li class="nav-item">
            <form class="search-bar" method="POST">
              <input type="text" class="form-control" name="Search" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        <?php } ?>

      </ul>

      <ul class="navbar-nav align-items-center right-nav-link">

        <li class="nav-item">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item user-details">
              <a href="javaScript:void();">
                <div class="media">
                  <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                  <div class="media-body">
                    <h6 class="mt-2 user-title"><?php echo $this->session->tempdata('username'); ?></h6>
                    <p class="user-subtitle"><?php echo $this->session->tempdata('email'); ?></p>
                  </div>
                </div>
              </a>
            </li>
            <?php if ($this->session->tempdata('role') == 'admin' || $this->session->tempdata('role') == 'staff') {
            ?>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><a href="<?php echo base_url(); ?>logout"> <i class="icon-power mr-2"></i> Logout</a></li>
            <?php } else { ?>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><a href="<?php echo base_url(); ?>customer_logout"> <i class="icon-power mr-2"></i> Logout</a></li>

            <?php   } ?>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!--End topbar header-->
  <div class="clearfix">
  </div>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- <div class="container">
        <?php if ($this->session->flashdata('user_registerd')) : ?>
          <?php echo '<p class"alert alert-success">' . $this->session->flashdata('user_registerd') . '</p>'; ?>
        <?php endif; ?>
      </div> -->