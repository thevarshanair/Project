<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Engineering Job in Healthcare</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/menu.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
  <header>
   <!-- <!-- Logo -->
  <!--  <a href="index.php" class="logo logo-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
    <!--  <span class="logo-mini"><b>EJH</b>P</span>
      <!-- logo for regular state and mobile devices -->
    <!--  <span class="logo-lg">logo</span>      
   <!-- </a>-->
  <nav>
  <div class="main" align="right">
            <ul class="mainnav">
                
               <li style="float:left"><a href="index.php"><span><img alt="" src="img/logomain.png"></span></a></li>
               <li style="float:right"><a href="#">Contact Us</a></li>
               
               <li class="hassubs" style="float:right"><a href="#">For Employer</a>
                    <ul class="dropdown">
                        
                        <li class="subs hassubs" style="float:right"><a href="#">Post Job</a>
                            <ul class="dropdown">
                                <li class="subs" style="float:right"><a href="login.php">Login</a></li>
                                <li class="subs" style="float:right"><a href="sign-up.php">Sign Up</a></li>
                                
                            </ul>
                        </li>
                
                <li class="hassubs" style="float:right"><a href="#">For Job Seeker</a>
                    <ul class="dropdown">
                        <li class="subs" style="float:right"><a href="jobs.php">Find Job</a></li>
                        <li class="subs" style="float:right"><a href="login.php">Login</a></li>
                         <li class="subs" style="float:right"><a href="sign-up.php">Sign Up</a></li>
                         </ul>
                </li>
                       <!-- <li class="subs hassubs"><a href="#">Address</a>
                            <ul class="dropdown">
                                <li class="subs"><a href="#">Head Office</a></li>
                                <li class="subs"><a href="#">Registered Office</a></li>
                                <li class="subs"><a href="#">Locate us</a></li>
                            </ul>
                        </li>-->
                         
                    </ul>
                </li>
               
                
                <li style="float:right"><a href="index.php">Home</a></li>
                
                   
            </ul>
            <br style="clear: both;">
        </div>
  </nav>
      </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header bg-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center index-head">
            <h1><strong>ENGINEERING JOBS IN HEALTHCARE</strong></h1>
            <p><a class="btn btn-success btn-lg" href="jobs.php" role="button">Search Jobs</a></p>
          </div>
        </div>
      </div>
    </section>


    <section id="about" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1>About US</h1> 
            <h3 align="center">We are the best organized, most user-friendly, and the <br>only website dedicated to <br>
<font color="green">engineering/technology jobs in healthcare.</font>
            </h3>
            
            <br>
            <p align="left">
           Why ENJOHE?<br>
While there are many websites covering healthcare jobs (e.g., doctor, nurse, therapist, pharmacist jobs), and many websites covering engineering/technology jobs, we are the only website focusing on their intersection - engineering/technology jobs in healthcare.  
<br>
Engineering/technology jobs in healthcare<br>
Engineers can solve healthcare problems, and engineering breakthrough often lead to healthcare advancements.
Engineering/technology professionals are among the most highly sought-after professionals in the healthcare, with increased demand and talent shortages leading to high salaries for many of those in the field.  Healthcare engineering is a dynamic, exciting, and challenging field where candidates with almost all engineering/technology specialties (Biomedical, Chemical, Civil, Computer, Electrical, Environmental, Industrial, Information, Materials, Mechanical, Software, Systems, etc.) may find  tremendous job and career opportunities (see table below).  
</p>
<br><br>
             
            
            </div></div></div></section>
            
            

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Test.... </strong>
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
