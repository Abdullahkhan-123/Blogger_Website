<?php
  include('config/constant.php')
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Bloggers">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>BLOGGER SPOT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">    
    
    
    <link rel="stylesheet" href="../admin/files/vendors/feather/feather.css">
  <link rel="stylesheet" href="../admin/files/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../admin/files/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../admin/files/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../admin/files/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../admin/files/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../admin/files/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../admin/files/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../admin/files/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../admin/files/images/favicon.png" />


    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->

  </head>
  <body>


    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

 <!-- Header -->
 <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>BLOGGER SPOT<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home                  
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details.php">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              


              <?php

                        if(isset($_SESSION['UserName']))
                        {
                            if($_SESSION['RoleType']=='Admin')
                            {
                              ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                          Profile
                                            <img class="img-xs rounded-circle" src="admin/files/images/faces/face8.jpg" alt="Profile image">
                                        </a>
                                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                              
                                    <li><a class="dropdown-item" href="#"><i class="menu-icon mdi mdi-home"></i> My Profile</a></li>
                                        <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="admin/index.php"><i class="menu-icon mdi mdi-home"></i> Dashboard</a></li>
                                        <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="auth/logout.php"><i class="menu-icon mdi mdi-home"></i> logout</a></li>
                              
                          
                                    </ul>
                                    </li>
                              <?php
                            }
                        }
                        else
                            {
                              ?>
                                    <div class="">
                                          <a class="nav-link" href="login.php">
                                          <i style='font-size:24px' class='far'>&#xf2bd;</i>
                                        <br>
                                      <span style="font-size:13px;">login/SignUp</span>
                                          </a>                  
                                    </div>
                              <?php
    
                            }
                ?>             
            </ul>
          </div>
        </div>
      </nav>
    </header>
