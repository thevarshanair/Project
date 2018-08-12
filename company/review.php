<?php

// To Handle Session Variables on This Page
session_start();

// If user Not logged in then redirect them back to homepage.
if (empty($_SESSION['id_company'])) {
    header("Location: ../index.php");
    exit();
}

require_once ("../db.php");

// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['jobfunction'])){
 if (empty($_POST['jobtitle'])

|| empty($_POST['degree'])
|| empty($_POST['major'])
|| empty($_POST['countries'])
|| empty($_POST['states'])
|| empty($_POST['cities'])
|| empty($_POST['zipcode'])
|| empty($_POST['categories'])
|| empty($_POST['subcategory'])
|| empty($_POST['subcategorytype'])
|| empty($_POST['experience'])
|| empty($_POST['maximumsalary'])
|| empty($_POST['minimumsalary'])
|| empty($_POST['description'])
|| empty($_POST['qualification'])
     ){ 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: create-job-post.php"); // Redirecting to first page 
 } else {
 // Sanitizing email field to remove unwanted characters.
 $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
 // After sanitization Validation is performed.
 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
 // Validating Contact Field using regex.
 if (!preg_match("/^[0-9]{10}$/", $_POST['contact'])){ 
 $_SESSION['error'] = "10 digit contact number is required.";
 header("location: page1_form.php");
 } else {
 if (($_POST['password']) === ($_POST['confirm'])) {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 } else {
 $_SESSION['error'] = "Password does not match with Confirm Password.";
 header("location: page1_form.php"); //redirecting to first page
 }
 }
 } else {
 $_SESSION['error'] = "Invalid Email Address";
 header("location: page1_form.php");//redirecting to first page
 }
 }
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: page1_form.php");//redirecting to first page
 }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Engineering Job in Healthcare</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../css/AdminLTE.min.css">
<link rel="stylesheet" href="../css/_all-skins.min.css">
<!-- Custom -->
<link rel="stylesheet" href="../css/custom.css">
 <link rel="stylesheet" href="../css/menu.css">
<script src="../js/jquery-1.4.4.min.js"></script>
<script src="../js/jqsimplemenu.js"></script>

<script src="../js/tinymce/tinymce.min.js"></script>

<script>tinymce.init({ selector:'#description', height: 300 });</script>


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
									<h3 class="box-title">
										Welcome <b><?php echo $_SESSION['name']; ?></b>
									</h3>
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
							<h2 align="center">
								<i>Review the Selection in Job Post Below:</i>
							</h2><br>
							<div class="row">
								<form method="post" action="addpost.php">
									<div class="col-md-12 latest-job ">
									<div class="form-group">
									<label class="form-control  input-lg" placeholder="Job Function: ">
									<?php echo((isset($_POST["jobfunction"]))?$_POST["jobfunction"]:"")?>	</label>			
									
										</div>
										
										<div class="form-group">
										<label class="form-control input-lg" placeholder="Job Title">
										<?php echo((isset( $_POST["jobtitle"]))?$_POST[""]:"jobtitle")?></label>
										
										</div>
    									
				<div class="form-group">
              	<label class="form-control  input-lg" placeholder="Country:">
              	<?php echo $_POST["countries"]?>
              	</label>
					
              </div> 
              
               <div class="form-group">               
				<label class="form-control  input-lg" placeholder="State:">
				<?php echo $_POST["states"]?></label>
				</div>
				
				<div class="form-group">
				<label class="form-control  input-lg" placeholder="City:" >
				<?php echo $_POST["cities"]?></label>
				</div>
				
				<div class="form-group">
				<label class="form-control  input-lg" placeholder="Postal code:" >
				<?php echo $_POST["zipcode"]?></label>
				</div>
				
				<div class="form-group">
				<label class="form-control  input-lg"  placeholder="Job Type">
				<?php echo $_POST["jobtype"]?></label>></div>
										
				<div class="form-group">
				<label  class="form-control  input-lg" placeholder="Salary Range: Minimum Salary">
				<?php echo $_POST["minimumsalary"]?></label>
										</div>
				<div class="form-group">
				<label class="form-control  input-lg" placeholder="Salary Range: Maximum Salary">
				<?php echo $_POST["maximumsalary"]?></label>								
				</div>
										
				<div class="form-group">
				<label class="form-control input-lg" placeholder="Qualification Required Degree">
				<?php echo $_POST["degree"]?></label>
				</div>
										
				<div class="form-group">
				<label class="form-control  input-lg" placeholder="Experience (in Years) Required" >
				<?php echo $_POST["postalcode"]?></label>
				</div>
										
				<div class="form-group">
				<label placeholder="Job Description">
				<?php echo $_POST["description"]?></label>
				</div>
																
				<div class="form-group">
              <label class="form-control  input-lg" placeholder="Healthcare Categories">
				<?php echo $_POST["categories"]?></label>
              </div> 
              
               <div class="form-group">               
				<label class="form-control  input-lg" placeholder="Healthcare Engineering Subcategory Type:">
				<?php echo $_POST["subcategory"]?></label>
				</div>
				
				<div class="form-group">
				<label class="form-control  input-lg" placeholder="Healthcare Engineering Subcategory" >
				<?php echo $_POST["subcategorytype"]?></label>
				</div>
              <div class="form-group">
				<label class="form-control input-lg" placeholder="Qualification Required Major" >
				<?php echo $_POST["major"]?></label>								
				</div>
				<div class="form-group">
				<label class="form-control input-lg" placeholder="Required Qualification Details">
				<?php echo $_POST["qualification"]?></label>								
				</div>
				<div class="form-group">
				
				<button type="submit" class="btn btn-flat btn-success" align="left">Create</button>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</section>



		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer" style="margin-left: 0px;">
			<div class="text-center">
				<strong>Test footer </strong> reserved.
			</div>
		</footer>

		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../js/adminlte.min.js"></script>
<script>
$( document ).ready(function() {
	pupulate("categories.php",{},"categories");	
	$('#categories').change(function () {
		 let data = {category_id : $(this).val() } ;	
		 pupulate("subcategory.php",data,"subcategory");		 
	 }); 
	 
	$('#subcategory').change(function () {				
		 let data = {hcsubcategory_id : $(this).val() } ;		
		 pupulate("subcategorytype.php",data,"subcategorytype");	 
		 	 });		 
   function pupulate(ajaxUrl,data,selector){   
	 $.ajax( {
			  type: "POST",
			  url:ajaxUrl, //gameCreateform.attr( 'action' ),
			  dataType: 'json',
			  data: data,
			  success: function( response ) {
			  $("#"+selector).empty();
			  $("#"+selector).append($('<option></option>').val(0).html("Select Healthcare Engineering Categories:"));
				 $.each(response, function (key, value) {
					$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
				});
	
			  }
			});   
   }	
   
});
</script>

<script>
$( document ).ready(function() {
	populate("countries.php",{},"countries");	
	$('#countries').change(function () {
		 let data = {country_id : $(this).val() } ;	
		 populate("states.php",data,"states");		 
	 }); 
	 
	$('#states').change(function () {				
		 let data = {state_id : $(this).val() } ;		
		 populate("cities.php",data,"cities");	 
		 	 });		 
   function populate(ajaxUrl,data,selector){   
	 $.ajax( {
			  type: "POST",
			  url:ajaxUrl, //gameCreateform.attr( 'action' ),
			  dataType: 'json',
			  data: data,
			  success: function( response ) {
			  $("#"+selector).empty();
			  $("#"+selector).append($('<option></option>').val(0).html("Please Select"));
				 $.each(response, function (key, value) {
					$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
				});
	
			  }
			});   
   }	
   
});
</script>
</body>
</html>
