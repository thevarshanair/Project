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
  <link rel="stylesheet" href="csstable.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/table.css">
  
  
  
<link rel="stylesheet" href="css/Text.css">
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
       
      <!-- Navbar Right Menu -->
      <div class="main" align="right">
            <ul class="mainnav">
        
        <li style="float:left"><a href="index.php"><span><img alt="" src="img/logomain.png"></span></a></li>
            
       
          <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          <li style="float:right">
            <a href="login.php">Login</a>
          </li>
         <li style="float:right">
            <a href="sign-up.php">Sign Up</a>
          </li>  
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li>
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li style="float:right">
            <a href="company/index.php">Dashboard</a>
          </li>
          <?php } ?>
          <li style="float:right">
            <a href="logout.php">Logout</a>
          </li>
          <?php } ?>          
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

<section id="tables" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-bottom-20" align="center">
									<h2 align="center">
								<i>Search Engineering Jobs in Healthcare</i>
							</h2>
									<h3><b>Job seeker: </b>In the table below, select those best describe your job target.</h3>
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
<td align="center" valign="middle"><b><i><a href="#providers" class="healthcaresectorSearch"" style="color: #0000FF" data-select="Healthcare providers">Healthcare providers</a></i></b></td>
<td align="left" valign="top">

<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Hospital" >Hospital</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Clinic">Clinic</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Dentist">Dentist</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Allied health">Allied health</a><br> <br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Optician">Optician</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Nursing home">Nursing home</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Rehabilitation facility">Rehabilitation facility</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Retirement center">Retirement center</a><br><br>
<a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Other healthcare organizations">Other healthcare organizations</a>
</td>
<td align="left" valign="top" style="line-height:13px;">

<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Biomedical engineering">Biomedical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Chemical engineering">Chemical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Civil engineering">Civil engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Clinical engineering">Clinical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Computer science/engineering">Computer science/engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Energy engineering">Energy engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Environmental engineering">Environmental engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Facilities engineering">Facilities engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Field engineering">Field engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Industrial engineering">Industrial engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Information technology/engineering">Information <br> &nbsp&nbsp technology/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Infrastructure engineering">Infrastructure engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Medical device service engineering">Medical device service <br> &nbsp&nbsp engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Software engineering">Software engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Supply chain engineering">Supply chain engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Surgery engineering">Surgery engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Telecommunication engineering">Telecommunication engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Others">Others </a>
</td>
<td align="left" valign="top" style="line-height:21px;">

<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:22px;">

<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Other">Other</a>
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
<b><i><br><a href="#providers" class="healthcaresectorSearch"" style="color: #0000FF" data-select="Manufacturers of medical devices/equipment/supplies">Manufacturers of medical devices/equipment/supplies</a></i></b>
</td>
<td align="left" valign="top" style="line-height:14px;">

<a style="color: #0000FF">Medical device/equipment/supplies manufacturer/distributor in:</a>
<ul list-style: none><li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Anesthesiology">Anesthesiology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Cardiovascular">Cardiovascular</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Clinical Chemistry">Clinical Chemistry</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Dental">Dental</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Ear, Nose and Throat">Ear, Nose and Throat</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Gastroenterology and Urology">Gastroenterology and Urology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in General and Plastic Surgery">General and Plastic Surgery</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in General Hospital and Personal Use">General Hospital and Personal Use</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Hematology">Hematology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Immunology">Immunology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Microbiology">Microbiology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Neurology">Neurology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Obstetrical and Gynecological">Obstetrical and Gynecological</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Ophthalmic">Ophthalmic</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Orthopedic">Orthopedic</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Pathology">Pathology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Physical Medicine">Physical Medicine</a></li> 
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Radiology">Radiology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Toxicology">Toxicology</a></li>
<li><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Medical device/equipment/supplies manufacturer/distributor in Others">Others</a></li></ul>

</td>
<td align="left" valign="top" style="line-height:14px;">

<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Automation engineering">Automation engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Biomedical engineering">Biomedical engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Chemical engineering">Chemical engineering</a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Clinical engineering">Clinical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Computer science/engineering">Computer science/engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Control engineering">Control engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Design engineering">Design engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Electronic engineering">Electronic engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Field engineering">Field engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Industrial engineering">Industrial engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Manufacturing engineering">Manufacturing engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Materials science/engineering">Materials science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Product engineering">Product engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Research & development engineering">Research & development  <br> &nbsp&nbsp&nbsp engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Sales engineering">Sales engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Software engineering">Software engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Supply chain engineering">Supply chain engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Telecommunication engineering">Telecommunication engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Testing engineering">Testing engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Others">Others  </a>

</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Other">Other</a>
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
<td align="center" valign="middle"><b><i><a href="#providers" class="healthcaresectorSearch"" style="color: #0000FF" data-select="Healthcare systems">Healthcare systems</a></i></b></td>
<td align="left" valign="middle"><br> <a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Companies that specialize in healthcare systems including facilities, information, financial, and other systems.">Companies that specialize in healthcare systems including facilities, information, financial and other systems.</a></td>
<td align="left" valign="top" >

<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Civil/construction engineering">Civil/construction engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Computer science/engineering">Computer science/engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Consulting engineering">Consulting engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Data science/engineering">Data science/engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Energy engineering">Energy engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Facilities engineering">Facilities engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Industrial engineering">Industrial engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Information technology/engineering">Information <br> &nbsp&nbsp technology/engineering</a><br>  
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Infrastructure engineering">Infrastructure engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Quality engineering">Quality engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Safety engineering">Safety engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Software engineering">Software engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Systems engineering">Systems engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Telecommunication engineering">Telecommunication engineering</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Others">Others </a>
 </td>
<td align="left" valign="top" style="line-height:21px;">

<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:22px;">

<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Other">Other</a>
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

<td align="center" valign="middle"><b><i><a href="#providers" class="healthcaresectorSearch"" style="color: #0000FF" data-select="Biotechnology & Pharmaceuticals">Biotechnology & Pharmaceuticals</a></i></b> </td>
<td align="left" valign="middle">
<br><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Companies engaged in research into and development of biological substances leading to new drugs and/or medical procedures.">Companies engaged in research into and development of biological substances leading to new drugs and/or medical procedures. </a><br>
 <br><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Manufacturers of prescription or over-the-counter drugs.">Manufacturers of prescription or over-the-counter drugs</a><br>
 </td>
<td align="left" valign="top" style="line-height:13px;">

<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Automation engineering">Automation engineering</a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Biomedical engineering">Biomedical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Chemical engineering">Chemical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Computer science/engineering">Computer science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Consulting engineering">Consulting engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Data science/engineering">Data science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Electrical engineering">Electrical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Field engineering">Field engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Industrial engineering">Industrial engineering  jobs</a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Information technology/engineering">Information <br> &nbsp&nbsp technology/engineering </a><br> 
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Manufacturing engineering">Manufacturing engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Materials science/engineering">Materials science/engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Mechanical engineering">Mechanical engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Process engineering">Process engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Product engineering">Product engineering  </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Quality engineering">Quality engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Research & development engineering">Research & development <br> &nbsp&nbsp&nbsp engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Safety engineering">Safety engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Software engineering">Software engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Systems engineering">Systems engineering </a><br>
<a href= "#fjobs" style="color: #0000FF" class="jobfunctionSearch" data-select="Others">Others </a>
 </td>
<td align="left" valign="top" style="line-height:20px;">

<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:22px;">

<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:20px;">

<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Other">Other</a>
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
<td align="center" valign="middle"><b><i><a href="#providers" class="healthcaresectorSearch"" style="color: #0000FF" data-select="Healthcare consulting, support, and education">Healthcare consulting, support, and education</a></i></b></td>
<td align ="left" valign="middle"><br><a href="#employer" class="healthcaresector_employerSearch" style="color: #0000FF" data-select="Companies that provide consulting service and support to healthcare, as well as continued education to healthcare personnel.">Companies that provide consulting service and support to healthcare, as well as continued education to healthcare personnel. </a></td>
<td align ="left" valign="top" style="line-height:15px;">

<a href= "#fjobs" style="color: #0000FF">Consulting/support engineering for</a>
<ul list-style: none><li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Consulting/support engineering for Healthcare providers">Healthcare providers</a></li>
<li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Consulting/support engineering for Manufacturers of medical devices/equipment/supplies">	Manufacturers of medical devices/equipment/supplies</a></li>
<li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Consulting/support engineering for Healthcare systems">	Healthcare systems</a></li>
<li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Consulting/support engineering for Biotechnology & Pharmaceuticals"> Biotechnology & Pharmaceuticals</a></li>
</ul><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF">Training/education engineering for</a>
<ul list-style: none><li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Training/education engineering for Healthcare providers">	Healthcare providers</a></li>
<li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Training/education engineering for Manufacturers of medical devices/equipment/supplies">	Manufacturers of medical devices/equipment/supplies</a></li>
<li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Training/education engineering for Healthcare systems">	Healthcare systems</a></li>
<li><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Training/education engineering for Biotechnology & Pharmaceuticals">	Biotechnology & Pharmaceuticals</a></li>
</ul><a href="#fjobs" class="jobfunctionSearch" style="color: #0000FF" data-select="Others"> Others </a>

</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Full Time">Full Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Part Time">Part Time</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Temporary">Temporary</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Contract">Contract</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Internship">Internship</a><br><br>
<a href="#emp" class="jobtypeSearch" style="color: #0000FF" data-select="Commission">Commission</a>
</td>
<td align="left" valign="top" style="line-height:21px;">

<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Bachelor">Bachelor</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Master">Master </a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="PhD">PhD</a><br><br><br>
<a href="#deg" class="degreeSearch" style="color: #0000FF" data-select="Other">Other</a>
</td>
<td align="left" valign="top" style="line-height:19px;">

<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Biomedical">Biomedical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Chemical">Chemical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Civil">Civil</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Computer">Computer</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Electrical">Electrical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Environmental">Environmental</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Industrial">Industrial</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Information">Information</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Materials">Materials</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Mechanical">Mechanical</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Software">Software</a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Systems">Systems </a><br>
<a href="#maj" class="majorSearch" style="color: #0000FF" data-select="Other">Other</a>
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

    <section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-top-50 margin-bottom-20">
          <h1 class="text-center">Latest Jobs</h1>  
          <h4>Seach for Job Title or Company or City </h4>
          
            <div class="input-group input-group-lg">
            
                <input type="text" id="searchBar" class="form-control">
                <span class="input-group-btn">
                  <button id="searchBtn" type="button" class="btn btn-info btn-flat">Go!</button>
                </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Filters</h3>
              </div>
              <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked tree" data-widget="tree">
                               
                                  
                   
                  
                   <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>Job Title<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='jobtitleSearch' data-target='".$row['jobtitle']."' class='".$row['jobtitle']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['jobtitle']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  
                        
                  
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i> Company Name <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                      <li><a href="" class="companyName" data-target='1'><i class="fa fa-circle-o text-yellow"></i>Test</a></li>
                      <li><a href="" class="companyName" data-target='2'><i class="fa fa-circle-o text-yellow"></i>Test</a></li>
                      <li><a href="" class="companyName" data-target='3'><i class="fa fa-circle-o text-yellow"></i>Test</a></li>
                      </ul>
                  </li>
                   <!--  
                                 
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i> Healthcare Industry Sector <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='healthcaresectorSearch' data-target='".$row['healthcaresector']."' class='".$row['healthcaresector']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['healthcaresector']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>

                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i> Employer Type <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='healthcaresector_employerSearch' data-target='".$row['healthcaresector_employer']."' class='".$row['healthcaresector_employer']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['healthcaresector_employer']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
       
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i> Job Function <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='jobfunctionSearch' data-target='".$row['jobfunction']."' class='".$row['jobfunction']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['jobfunction']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>-->
                  
                 
                  
                   <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>Country<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='countriesSearch' data-target='".$row['countries']."' class='".$row['countries']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['countries']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>State<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='statesSearch' data-target='".$row['states']."' class='".$row['states']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['states']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>City<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='citiesSearch' data-target='".$row['cities']."' class='".$row['cities']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['cities']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                 
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>Employment<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='jobtypeSearch' data-target='".$row['jobtype']."' class='".$row['jobtype']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['jobtype']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  
                   
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>Salary (US$ or equivalent)<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='salarySearch' data-target='".$row['minimumsalary']."' class='".$row['minimumsalary']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['minimumsalary']." to ".$row['maximumsalary']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>Degree<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='degreeSearch' data-target='".$row['degree']."' class='".$row['degree']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['degree']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i>Major<span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='majorSearch' data-target='".$row['major']."' class='".$row['major']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['major']."</a></li>";
                    }
                  }
                ?>  </ul>
                  </li>
                  
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-plane text-red"></i> Experience (years) <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                    <?php
                  $sql="SELECT * FROM job_post";
                  $result=$conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a  href=' ' class='experienceSearch' data-target='".$row['experience']."' class='".$row['experience']."'> <i class='fa fa-circle-o text-yellow'></i> ".$row['experience']."</a></li>";
                    }
                  }
                ?>
                     </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          
          
          
          
          
          <div class="col-md-9">

          <?php

          $limit = 4;

          $sql = "SELECT COUNT(id_jobpost) AS id FROM job_post";
          $result = $conn->query($sql);
          if($result->num_rows > 0)
          {
            $row = $result->fetch_assoc();
            $total_records = $row['id'];
            $total_pages = ceil($total_records / $limit);
          } else {
            $total_pages = 1;
          }

          ?>

          
            <div id="target-content">
              
            </div>
            <div class="text-center">
              <ul class="pagination text-center" id="pagination"></ul>
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
    reserved.
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
<script src="js/jquery.twbsPagination.min.js"></script>

<script>
  function Pagination() {
    $("#pagination").twbsPagination({
      totalPages: <?php echo $total_pages; ?>,
      visible: 5,
      onPageClick: function (e, page) {
        e.preventDefault();
        $("#target-content").html("loading....");
        $("#target-content").load("jobpagination.php?page="+page);
      }
    });
  }
</script>

<script>
  $(function () {
      Pagination();
  });
</script>

<script>
  $("#searchBtn").on("click", function(e) {
    e.preventDefault();
    var searchResult = $("#searchBar").val();
    var filter = "searchBar";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  $(".experienceSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "experience";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>
 
<script>
  $(".countriesSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "countries";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  $(".statesSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "states";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>
    
<script>
  $(".citiesSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "cities";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>
 
<script>
$(".jobfunctionSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "jobfunction";
    if(searchResult != "") {
        $("#pagination").twbsPagination('destroy');
        Search(searchResult, filter);
    } else {
        $("#pagination").twbsPagination('destroy');
        Pagination();
    }
});
    </script>

<script>
$(".jobtitleSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "jobtitle";
    if(searchResult != "") {
        $("#pagination").twbsPagination('destroy');
        Search(searchResult, filter);
    } else {
        $("#pagination").twbsPagination('destroy');
        Pagination();
    }
});
    </script>
  
    <script>
  $(".jobtypeSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "jobtype";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
$(".degreeSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "degree";
    if(searchResult != "") {
        $("#pagination").twbsPagination('destroy');
        Search(searchResult, filter);
    } else {
        $("#pagination").twbsPagination('destroy');
        Pagination();
    }
});
    </script>

<script>
$(".majorSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "major";
    if(searchResult != "") {
        $("#pagination").twbsPagination('destroy');
        Search(searchResult, filter);
    } else {
        $("#pagination").twbsPagination('destroy');
        Pagination();
    }
});
    </script>

<script>
$(".salarySearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "minimumsalary";
    if(searchResult != "") {
        $("#pagination").twbsPagination('destroy');
        Search(searchResult, filter);
    } else {
        $("#pagination").twbsPagination('destroy');
        Pagination();
    }
});
    </script>

<script>
  $(".companyName").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "companyName";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  $(".healthcaresectorSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "healthcaresector";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  $(".healthcaresector_employerSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "healthcaresector_employer";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  function Search(val, filter) {
    $("#pagination").twbsPagination({
      totalPages: <?php echo $total_pages; ?>,
      visible: 5,
      onPageClick: function (e, page) {
        e.preventDefault();
        val = encodeURIComponent(val);
        $("#target-content").html("loading....");
        $("#target-content").load("search.php?page="+page+"&search="+val+"&filter="+filter);
      }
    });
  }
</script>


</body>
</html>
