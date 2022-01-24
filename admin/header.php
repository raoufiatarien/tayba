<?php 
header ('Content-type: text/html; charset=iso8859-15');
session_start();
if (!isset($_SESSION['username'])){
  header("location:login.php");
}
require "database.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">


  <title>Tayba - Admin </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Tayba <span class="lite">Admin</span></a>
      <!--logo end-->



      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.png">
                            </span>
                            <span class="username"><?php echo $_SESSION['username'] ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="settings.php"><i class="icon_profile"></i> Settings</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_close"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="slides.php" class="">
                          <i class="icon_desktop"></i>
                          <span>Slides</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="about.php" class="">
                          <i class="icon_info_alt"></i>
                          <span>About</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="certificates.php" class="">
                          <i class="icon_toolbox_alt"></i>
                          <span>Certificates</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="services.php" class="">
                          <i class="icon_star"></i>
                          <span>Services </span>
                      </a>
          </li>
          <li>
            <a class="" href="products.php">
                          <i class="icon_gift_alt"></i>
                          <span>products</span>

                      </a>

          </li>
          <li>
            <a class="" href="infos.php">
                          <i class="icon_documents_alt"></i>
                          <span>Company infos</span>
                      </a>
          </li>
          
          <li class="hidden-md hidden-lg">
            <a class="" href="settings.php">
                          <i class="icon_profile"></i>
                          <span>settings</span>

                      </a>
          </li>
          <li class="hidden-md hidden-lg">
            <a class="" href="logout.php">
                          <i class="icon_close"></i>
                          <span>log out</span>

                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
