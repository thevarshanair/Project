<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter view-job-post.php in URL.
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
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
   <link rel="stylesheet" href="../css/menu.css">
  
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
            <h2><i>Talent Database</i></h2>
            <p>In this section you can download resume of all candidates who applied to your job posts</p>
            <div class="row margin-top-20">
              <div class="col-md-12">
                <div class="box-body table-responsive no-padding">
                  <table id="example2" class="table table-hover">
                    <thead>
                      <th>Candidate</th>
                      <th>Highest Qualification</th>
                      <th>Skills</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Download Resume</th>
                    </thead>
                    <tbody>
                    <?php
                       $sql = "SELECT users.* FROM job_post INNER JOIN apply_job_post ON job_post.id_jobpost=apply_job_post.id_jobpost  INNER JOIN users ON users.id_user=apply_job_post.id_user WHERE apply_job_post.id_company='$_SESSION[id_company]' GROUP BY users.id_user";
                            $result = $conn->query($sql);

                            if($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) 
                              {     

                                $skills = $row['skills'];
                                $skills = explode(',', $skills);
                      ?>
                      <tr>
                        <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                        <td><?php echo $row['qualification']; ?></td>
                        <td>
                          <?php
                          foreach ($skills as $value) {
                            echo ' <span class="label label-success">'.$value.'</span>';
                          }
                          ?>
                        </td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><a href="../uploads/resume/<?php echo $row['resume']; ?>" download="<?php echo $row['firstname'].' Resume'; ?>"><i class="fa fa-file-pdf-o"></i></a></td>
                      </tr>

                      <?php

                        }
                      }
                      ?>

                    </tbody>                    
                  </table>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Test footer </strong>
  
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
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>


<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });
</script>
</body>
</html>
