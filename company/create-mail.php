<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if(empty($_SESSION['id_company'])) {
  header("Location: ../index.php");
  exit();
}

require_once("../db.php");
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
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/menu.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

  <script src="../js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#description', height: 150 });</script>
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

  <header class="main-header">

   <!-- Logo -->
  
        

    <!-- Header Navbar: style can be found in header.less -->
    <nav>
  <div class="main" align="right">
            <ul class="mainnav">
                
               <li class="hassubs" style="float:left"><a href="index.php"><span><img alt="" src="../img/logomain.png"></span></a></li>
               
                <li class="hassubs" style="float:left">
         <a href=""> Welcome <b><?php echo $_SESSION['name']; ?></b></a>
          </li>
          <li class="hassubs" style="float:right">
          <a href="../logout.php">Logout</a>
          </li>
              <li class="hassubs" style="float:right"><a href="#">Contact Us</a></li>
                <?php 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li class="hassubs" style="float:right">
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li class="hassubs" style="float:right">
            <a href="index.php">Dashboard</a>
          </li>
          <?php } ?>
          
         
              <!-- 
                
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
                        <!-- <li class="hassubs" style="float:right"><a href="#">For Employer</a>
                    <ul class="dropdown">
                        
                        <li class="subs hassubs" style="float:right"><a href="#">Post Job</a>
                            <ul class="dropdown">
                                <li class="subs" style="float:right"><a href="login.php">Login</a></li>
                                <li class="subs" style="float:right"><a href="sign-up.php">Sign Up</a></li>
                                
                            </ul>
                        </li> 
                    </ul>
                </li>-->
               
                
               <!--   <li style="float:right"><a href="index.php">Home</a></li>-->
                
                   
            </ul>
            <br style="clear: both;">
        </div>
  </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Welcome <b><?php echo $_SESSION['name']; ?></b></h3>
              </div>
              <div class="box-body no-padding">
									<ul class="nav nav-pills nav-stacked">
										<li><a href="index.php"><i class="fa fa-dashboard"></i>
												Dashboard</a></li>
										<li><a href="edit-company.php"><i class="fa fa-tv"></i> My
												Company</a></li>
										<li class="active"><a href="create-job-post.php"><i
												class="fa fa-file-o"></i> Create Job Post</a></li>
										<li><a href="my-job-post.php"><i class="fa fa-file-o"></i> My
												Job Post</a></li>
										<!--  <li><a href="job-applications.php"><i class="fa fa-file-o"></i>
												Job Application</a></li>
										<li><a href="mailbox.php"><i class="fa fa-envelope"></i>
												Mailbox</a></li>-->
										<li><a href="settings.php"><i class="fa fa-gear"></i> Account Settings</a></li>
										<!--  <li><a href="resume-database.php"><i class="fa fa-user"></i>
												Resume Database</a></li>-->
										<li><a href="../logout.php"><i
												class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
									</ul>
								</div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2">
          <form action="add-mail.php" method="post">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Compose New Message</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <select name="to" class="form-control">
                    <?php 
                    $sql = "SELECT * FROM apply_job_post INNER JOIN users ON apply_job_post.id_user=users.id_user WHERE apply_job_post.id_company='$_SESSION[id_company]' AND apply_job_post.status='2'";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row['id_user'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
                      }
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="Subject:">
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" id="description" name="description" placeholder="Job Description"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <a href="mailbox.php" class="btn btn-default"><i class="fa fa-times"></i> Discard</a>
              </div>
              <!-- /.box-footer -->
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Test footer </strong>
    reserved.
    </div>
  </footer>



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>

</body>
</html>
