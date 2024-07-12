<?php

$page =  substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">


<title>
  
   admin panel

</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->

<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

  </head>

  <body class="g-sidenav-show  bg-gray-100">
 
  <?php
include('includes/sidebar.php');?>
 
      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  
      
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
   
</nav>

<!-- End Navbar -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="row mt-4">
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">weekend</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Today's Money</p>
<h4 class="mb-0">$53k</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Today's Users</p>
<h4 class="mb-0">2,300</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">New Clients</p>
<h4 class="mb-0">3,462</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">weekend</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Sales</p>
<h4 class="mb-0">$103,430</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>  
      
       </main>
 
<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>











































































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>

</html>
