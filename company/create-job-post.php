<?php

// To Handle Session Variables on This Page
session_start();

// If user Not logged in then redirect them back to homepage.
if (empty($_SESSION['id_company'])) {
    header("Location: ../index.php");
    exit();
}
require_once ("../db.php");
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Theme style -->
<link rel="stylesheet" href="../css/AdminLTE.min.css">
<link rel="stylesheet" href="../css/_all-skins.min.css">
<link rel="stylesheet" href="../css/table.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/Text.css">
<link rel="stylesheet" href="../css/divclass.css">
<!-- Custom -->
<link rel="stylesheet" href="../css/custom.css">
<script src="../js/jquery-1.4.4.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <a href="index.php" class="logo logo-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EJH</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img alt="" src="../img/logo.png"></span>      
    </a>
        

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">    
       
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li align="left">
            <a href="index.php" align="left" ><b>ENGINEERING JOBS IN HEALTHCARE</b></a>
          </li>
          <li>&nbsp</li> <li>&nbsp</li> <li>&nbsp</li>
          <li>
         <a href=""> Welcome <b><?php echo $_SESSION['name']; ?></b></a>
          </li>
          <li>
            <a href="#about">About Us</a>
          </li>
          <?php //if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          
          <?php // } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li>
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li>
            <a href="index.php">Dashboard</a>
          </li>
          <?php } ?>
          <li>
          <a href="../logout.php">Logout</a>
          </li>
          <?php // } ?>
        </ul>
      </div>
    </nav>
		</header>
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="margin-left: 0px;">


<section id="tables" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-bottom-20">
									<h2 align="center">
								<i>Post a Job</i>
							</h2>
							<p>The table below is an overall view of engineering jobs in healthcare. The unique multi-dimensional mega-menu design allows both employers and job seekers to see all their choices in one glance.  The purpose is to prevent employers from entering erroneous job data, while enabling job seekers to quickly narrow down their choices. This is more efficient than using dropdown boxes/menus adopted by most job search sites where users cannot see options at lower levels.  Both employers and job seekers use the same table to eliminate the chance of mismatch.</p>
							<br>
									<h3><b>Employer: </b>In the table below, select those best describe your opening. What you select will automatically populate the table to be submitted.</h3>
<br>
<div class="col-md-12 latest-job margin-bottom-20">
<table border="1" align="center" class="zui-table">
									<tr valign="middle">
									<td rowspan="2" align="center"><h5><b>Healthcare Industry Sector</b></h5></td>
									<td rowspan="2" align="center"><b>Employer</b></td>
									<td colspan ="2" align="center"><b>Job</b></td>
									
									<td align="center" colspan="2"><b>Candidate Qualifications Required/Preferred</b></td>
									</tr>
									<tr>
									<td align="center"><b>Job Function</b></td>
									<td align="center"><b>&nbspEmployment&nbsp</b></td>
									<td align="center"><b>&nbspDegree&nbsp</b></td>	
									<td align="center"><b>Major in Engineering</b></td>	
									<!-- <td align="center"><b>Years of Experience</b></td>	 -->															
									</tr>

									
<tr> 							
<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Healthcare providers">Healthcare providers</a></i></b></td>
<td align="left" valign="top" style="line-height:17px;">

Hospital<br><br>
Clinic<br><br>
Dentist<br><br>
Allied health<br> <br>
Optician<br><br>
Nursing home<br><br>
Rehabilitation facility<br><br>
Retirement center<br><br>
Other healthcare organizations
</td>
<td align="left" valign="top" style="line-height:12px;">

<a href= "#fjobs" style="color: #0000FF" data-select="Biomedical engineering">Biomedical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Chemical engineering">Chemical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Civil engineering">Civil engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Clinical engineering">Clinical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Energy engineering">Energy engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Environmental engineering">Environmental engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Facilities engineering">Facilities engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Field engineering">Field engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Information technology/engineering">Information <br> &nbsp&nbsp technology/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Infrastructure engineering">Infrastructure engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Medical device service engineering">Medical device service <br> &nbsp&nbsp engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Software engineering">Software engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Supply chain engineering">Supply chain engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Surgery engineering">Surgery engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Telecommunication engineering">Telecommunication engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Others">Others </a>
</td>
<td align="left" valign="top" style="line-height:20px;">

<a href="#emp" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Contract">Contract</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Internship">Internship</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:25px;">

<a href="#deg" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Master">Master </a><br><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:25px;">

<a href="#maj" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" style="color: #0000FF" data-select="Other">Other</a>
</td>
<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>
<tr>
<td align="center" valign="middle">
<b><i><br><a href="#providers" style="color: #0000FF" data-select="Manufacturers of medical devices/equipment/supplies">Manufacturers of medical devices/equipment/supplies</a></i></b>
</td>
<td align="left" valign="top" style="line-height:12px;">

Medical device/equipment/supplies manufacturer/distributor in:
<ul><li>Anesthesiology</li>
<li>Cardiovascular</li>
<li>Clinical Chemistry</li>
<li>Dental</li>
<li>Ear, Nose and Throat</li>
<li>Gastroenterology and Urology</li>
<li>General and Plastic Surgery</li>
<li>General Hospital and Personal Use</li>
<li>Hematology</li>
<li>Immunology</li>
<li>Microbiology</li>
<li>Neurology</li>
<li>Obstetrical and Gynecological</li>
<li>Ophthalmic</li>
<li>Orthopedic</li>
<li>Pathology</li>
<li>Physical Medicine</li> 
<li>Radiology</li>
<li>Toxicology</li>
<li>Others</li></ul>

</td>
<td align="left" valign="top" style="line-height:12px;">

<a href= "#fjobs" style="color: #0000FF" data-select="Automation engineering">Automation engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Biomedical engineering">Biomedical engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Chemical engineering">Chemical engineering</a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Clinical engineering">Clinical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Control engineering">Control engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Design engineering">Design engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Electronic engineering">Electronic engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Field engineering">Field engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Manufacturing engineering">Manufacturing engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Materials science/engineering">Materials science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Product engineering">Product engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Research & development engineering">Research & development  <br> &nbsp&nbsp&nbsp engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Sales engineering">Sales engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Software engineering">Software engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Supply chain engineering">Supply chain engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Telecommunication engineering">Telecommunication engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Testing engineering">Testing engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Others">Others  </a>

</td>
<td align="left" valign="top" style="line-height:20px;">

<a href="#emp" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Contract">Contract</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Internship">Internship</a><br><br><br>
<a href="#emp" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:25px;">

<a href="#deg" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Master">Master </a><br><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:25px;">

<a href="#maj" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" style="color: #0000FF" data-select="Other">Other</a>
</td>
<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>
<tr>
<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Healthcare systems">Healthcare systems</a></i></b></td>
<td align="left" valign="middle"><br>Companies that specialize in healthcare systems including facilities, information, financial and other systems.</td>
<td align="left" valign="top" style="line-height:12px;">

<a href= "#fjobs" style="color: #0000FF" data-select="Civil/construction engineering">Civil/construction engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Energy engineering">Energy engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Facilities engineering">Facilities engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Information technology/engineering">Information <br> &nbsp&nbsp technology/engineering</a><br>  
<a href= "#fjobs" style="color: #0000FF" data-select="Infrastructure engineering">Infrastructure engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Quality engineering">Quality engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Safety engineering">Safety engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Software engineering">Software engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Systems engineering">Systems engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Telecommunication engineering">Telecommunication engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Others">Others </a>
 </td>
<td align="left" valign="top" style="line-height:18px;">

<a href="#emp" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:20px;">

<a href="#deg" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:15px;">

<a href="#maj" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" style="color: #0000FF" data-select="Other">Other</a>
</td>
<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>									
<tr>

<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Biotechnology & Pharmaceuticals">Biotechnology & Pharmaceuticals</a></i></b> </td>
<td align="left" valign="middle">
<br>Companies engaged in research into and development of biological substances leading to new drugs and/or medical procedures.<br>
 <br>Manufacturers of prescription or over-the-counter drugs<br>
 </td>
<td align="left" valign="top" style="line-height:12px;">

<a href= "#fjobs" style="color: #0000FF" data-select="Automation engineering">Automation engineering</a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Biomedical engineering">Biomedical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Chemical engineering">Chemical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Computer science/engineering">Computer science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Field engineering">Field engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Industrial engineering">Industrial engineering  jobs</a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Information technology/engineering">Information <br> &nbsp&nbsp technology/engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" data-select="Manufacturing engineering">Manufacturing engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Materials science/engineering">Materials science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Process engineering">Process engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Product engineering">Product engineering  </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Research & development engineering">Research & development <br> &nbsp&nbsp&nbsp engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Software engineering">Software engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" data-select="Others">Others </a>
 </td>
<td align="left" valign="top" style="line-height:25px;">

<a href="#emp" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:28px;">

<a href="#deg" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:21px;">

<a href="#maj" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" style="color: #0000FF" data-select="Other">Other</a>
</td>
<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>	
<tr >
<td align="center" valign="middle"><b><i><a href="#providers" style="color: #0000FF" data-select="Healthcare consulting, support, and education">Healthcare consulting, support, and education</a></i></b></td>
<td align ="left" valign="middle"><br>Companies that provide consulting service and support to healthcare, as well as continued education to healthcare personnel.</td>
<td align ="left" valign="top" style="line-height:13px;">

<a href= "#fjobs" style="color: #0000FF" >Consulting/support engineering for</a>
<ul><li>Healthcare providers</li>
<li>Manufacturers of medical devices/equipment/supplies</li>
<li>Healthcare systems</li>
<li>Biotechnology & Pharmaceuticals</li>
</ul><a href= "#fjobs" style="color: #0000FF" >Training/education engineering for</a>
<ul><li>Healthcare providers</li>
<li>Manufacturers of medical devices/equipment/supplies</li>
<li>Healthcare systems</li>
<li>Biotechnology & Pharmaceuticals</li>
</ul>
<a href= "#fjobs" style="color: #0000FF" data-select="Others">Others </a>

</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#emp" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:21px;">

<a href="#deg" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:17px;">

<a href="#maj" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" style="color: #0000FF" data-select="Other">Other</a>
</td>
<!-- <td align="left">
<br>
<a href="#exp" style="color: #0000FF" data-select="1"  id="link1">1</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="2" id="link2">2</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="3" id="link3">3</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="4" id="link4">4</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="5" id="link5">5</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="6" id="link6">6</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="7" id="link7">7</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="8" id="link8">8</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="9" id="link9">9</a><br><br>
<a href="#exp" style="color: #0000FF" data-select="10" id="link10">10</a><br><br>
<a href="#exp" style="color: #0000FF" data-select=">10" id="link>10">> 10</a><br><br>
</td> -->
</tr>								
</table>
</div>

</div></div></div></section>
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
										<li><a href="settings.php"><i class="fa fa-gear"></i>Account Settings</a></li>
										<li><a href="../logout.php"><i
												class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-9 bg-white padding-2">
							<h2 align="center">
								<i>More details about your job opening:</i>
							</h2><br>
							<div class="row">
							<?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
<form method="post" action="addpost.php">

<!--<form method="post" action="review.php">	-->
<div class="col-md-12 latest-job ">
<div class="form-group">

<div align="center" valign="middle" class="divselection">
   
    <label class="divselection" valign="middle"><h4><b>JOB DESCRIPTION</b></h4></label>
   
 </div>
					
<div class="form-group">
<label>Healthcare Industry Sector</label>
<select type="text" class="form-control  input-lg"  id="healthcaresector" name="healthcaresector" placeholder="Select Healthcare Industry Sector: " required>
<?php
                  $sql="SELECT * FROM healthcaresector";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "<option value='".$row['name']."' data-id='".$row['id']."'>".$row['name']."</option>";
                    }
                  }
 ?></select></div>
 
<!-- <div class="form-group">
 <label>Employer</label>
<select type="text" class="form-control  input-lg"  id="healthcaresector_employer" name="healthcaresector_employer" placeholder="Select Employer Type: " required>

<?php
                /*   $sql="SELECT * FROM healthcaresector_employer";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "<option value='".$row['employer']."' data-id='".$row['id']."'>".$row['employer']."</option>";
                    }
                  } */
 ?></select></div>-->
 									
<div class="form-group">
<label>Job Function</label>
<select class="form-control  input-lg"  id="jobfunction" name="jobfunction" placeholder="Select Job Function:" required>
				
<?php 
$sql="SELECT * FROM jobfunction";
$result=$conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row['name']."' data-id='".$row['id']."'>".$row['name']."</option>";        
    }
}
?>								
</select></div>						

										
<div class="form-group">
 	<label>Job Title</label>
<input class="form-control input-lg" type="text" id="jobtitle" name="jobtitle" >
</div></div>

<div class="form-group">
<label>Company Name</label>
<input class="form-control input-lg" type="text" id="companyname" name="companyname" > 
</input>
</div>

<div class="form-group">
				<label>Country</label>
              <select name="countries" id="countries" class="form-control  input-lg" placeholder="Country:">
				</select>
              </div>
               <div class="form-group"> 
               <label>State</label>              
				<select name="states" id="states"  class="form-control  input-lg" placeholder="State:">
				</select>
				</div>
				
				<div class="form-group">
				<label>City</label>
				<select name="cities" id="cities" class="form-control  input-lg" placeholder="City:" >
				</select>
				</div>
				
				
				
				
				
				<div class="form-group">
				<label>Postal Code</label>
				<input type="text" name="zipcode" id="zipcode" class="form-control  input-lg">
				</div>
	 			
				<div class="form-group">
				<label>Employment</label>
											<select class="form-control  input-lg"
												id="jobtype" name="jobtype" placeholder="Job Type"
												required="">
												<option>Full Time</option>
												<option>Part Time</option>
												<option>Temporary</option>	
												<option>Contract</option>	
												<option>Internship</option>
												<option>Commission</option>								
												</select>												
										</div>
										
										
				<div class="form-group">
				<label style="width: 300px">Annual Salary (US$ or equivalent):  </label><br>
				
				<p>
				Minimum $: <input class="form-textbox" type="number"
												id="minimumsalary" min="1000" autocomplete="off"
												name="minimumsalary" required="">&nbsp&nbsp&nbsp
				Maximum $: 
				<input class="form-textbox" type="number"
												id="maximumsalary" name="maximumsalary" required="">&nbsp&nbsp&nbsp
												Negotiable: &nbsp
												<input type="checkbox"
												id="negotiable" autocomplete="off"
												name="negotiable" placeholder="Negotiable">
				</p>								
	</div>
										
	
	<?php 
	
	/* $healthcaresector = mysqli_real_escape_string($conn, $_POST['healthcaresector']);
	$healthcaresector_employer  = mysqli_real_escape_string($conn, $_POST['healthcaresector_employer']);
	$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
	$maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
	$experience = mysqli_real_escape_string($conn, $_POST['experience']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	$jobfunction = mysqli_real_escape_string($conn, $_POST['jobfunction']);
	$categories = mysqli_real_escape_string($conn, $_POST['categories']);
	$subcategory = mysqli_real_escape_string($conn, $_POST['subcategory']);
	$subcategorytype = mysqli_real_escape_string($conn, $_POST['subcategorytype']);
	$countries = mysqli_real_escape_string($conn, $_POST['countries']);
	$states = mysqli_real_escape_string($conn, $_POST['states']);
	$cities = mysqli_real_escape_string($conn, $_POST['cities']);
	$zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$major = mysqli_real_escape_string($conn, $_POST['major']);
	$negotiable = mysqli_real_escape_string($conn, $_POST['negotiable']);
	$id_company = mysqli_real_escape_string($conn, $_SESSION['id_company']);
	$name = mysqli_real_escape_string($conn, $_SESSION['name']);
	$postdate = mysqli_real_escape_string($conn, $_SESSION['postdate']);
	$startdate = mysqli_real_escape_string($conn, $_SESSION['startdate']);
	$email = mysqli_real_escape_string($conn, $_SESSION['email']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$streetaddress = mysqli_real_escape_string($conn, $_POST['streetaddress']);
	$appdeadline = mysqli_real_escape_string($conn, $_POST['appdeadline']);
	//$negotiable, $firstname, $postdate, $startdate, $email, $contactno, $streetaddress, $appdeadline */
	
	
	?>
										
						
										
<div class="form-group">
<label>Date job posted (mm/dd/yyyy)</label>
<input class='form-control input-lg' type='date' id='postdate'>
</div>
 <div class="form-group">
<label>Position start date (mm/dd/yyyy)</label>
<input class='form-control input-lg' type='date' id="startdate"></input></div>



<div align="center" valign="middle" class="divselection">
<label style="width: 300px"><h4 valign="middle"><b>CANDIDATE QUALIFICATIONS</b></h4></label>
   
    
    
  
 </div>
					
 								<div class="form-group">
										<label>Degree</label>
											<select class="form-control input-lg" id="degree" name="degree"
												placeholder="Qualification Required Degree" required="">
												<option value="Bachelor">Bachelor</option>
												<option value="Masters">Masters</option>
												<option value="PhD">PhD</option>
												<option value="Other">Other</option>
												</select>
												
										</div>
										<div class="form-group">
              <label>Major in Engineering</label>
<select class="form-control input-lg" id="major" name="major" placeholder="Qualification Required Major" required="">
												
												<option>Biomedical</option>
												<option>Chemical</option>
												<option>Civil</option>
												<option>Computer</option>
												<option>Electrical</option>
												<option>Environmental</option>
												<option>Industrial</option>
												<option>Information</option>
												<option>Materials</option>
												<option>Mechanical</option>
												<option>Software</option>
												<option>Systems</option> 
												<option>Other</option>
												</select>
												
										</div>
					
										
										<div class="form-group">
										<label>Years of experience</label>
											<select class="form-control  input-lg"
												id="experience"  name="experience"
												placeholder="Experience (in Years) Required" required="">
												<option value ="1" >1</option>
												<option value='2'>2</option>
												<option value='3'>3</option>
												<option value='4'>4</option>
												<option value='5'>5</option>
												<option value='6'>6</option>
												<option value='7'>7</option>
												<option value='8'>8</option>
												<option value='9'>9</option>
												<option value='10'>10</option>
												<option value='>10'> >10 </option></select>
			
										</div>
										
	<div align="center" valign="middle" class="divselection">
<label style="width: 300px"><h4 valign="middle"><b>Application contact:</b></h4></label>
  
 </div>			


	
<div class="form-group">
<label>First Name</label>
<input class='form-control input-lg'  type="firstname" id="name">
</div>
<div class="form-group">
<label>Last Name</label>
<input class='form-control input-lg'  type="lastname" id="name">
</div>
 
 <div class="form-group">
<label>Email</label>
<input class='form-control input-lg' type="text" id="email">
</div>
  <div class="form-group">
<label>Phone</label>
<input class='form-control input-lg' type="text" id="contactno">
</div>
 
 
<div class="form-group">
<label>Address</label>
<input class='form-control input-lg' type="text" id="streetaddress">
</div>		
    <div class="form-group">
<label>Application deadline (mm/dd/yyyy)</label>
<input class="form-control input-lg" type="date" id="appdeadline" data-id="appdeadline">
</input>
</div>										
										
										
										
										
										<br>
										
			<div align="center" valign="middle" class="divselection">
<label style="width: 300px"><h4 valign="middle"><b>Job Description</b></h4></label>
  
 </div>							
										
			<div class="form-group">
				
				<textarea class="form-control input-lg" id="description" name="description" placeholder="Job Description"></textarea>
				</div>
				</div>
				<!-- 											
				<div class="form-group">
              <select name="categories" id="categories" class="form-control  input-lg" placeholder="Healthcare Categories">
					<option value="">Healthcare Engineering Categories:</option></select>
              </div> 
              
               <div class="form-group">               
				<select name="subcategory" id="subcategory"  class="form-control  input-lg" placeholder="Healthcare Engineering Subcategory Type:">
				<option value="">Healthcare Engineering Subcategory Type:</option></select>
				</div>
				
				<div class="form-group">
				<select name="subcategorytype" id="subcategorytype" class="form-control  input-lg" placeholder="Healthcare Engineering Subcategory" >
				<option value="">Healthcare Engineering Subcategory:</option></select>
				</div>
				
				 -->	
              
										<!--  
										<div class="form-group">
											<textarea class="form-control input-lg" id="qualification" name="qualification"
												placeholder="Required Qualification Details" required=""></textarea>
												
										</div>
										-->
										</div>
										<div class="form-group">
										<div class="form-group" align="center">
										
											
											<button align="right" type="submit" class="btn btn-flat btn-success" onclick="review.php">Submit</button>
									
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

<script type="text/javascript">
var $sec = $('#healthcaresector');
$('a[href="#providers"]').click(function () {
    $sec.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $emp = $('#healthcaresector_employer');
$('a[href="#employer"]').click(function () {
    $emp.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $majo = $('#major');
$('a[href="#maj"]').click(function () {
    $majo.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $degr = $('#degree');
$('a[href="#deg"]').click(function () {
    $degr.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
var $expe = $('#experience');
$('a[href="#exp"]').click(function () {
    $expe.val( $(this).data('select') );
});
</script>
<script type="text/javascript">
 var $jfun = $('#jobfunction');
$('a[href="#fjobs"]').click(function () {
    $jfun.val( $(this).data('select') );
}); 
</script>

<script type="text/javascript">
var $fun = $('#jobtype');
$('a[href="#emp"]').click(function() {
    $fun.val( $(this).data('select') );
});
</script>


</body>
</html>
