<?php

session_start();

require_once("db.php");

$limit = 4;

if(isset($_GET["page"])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$start_from = ($page-1) * $limit;


if(isset($_GET['filter']) && $_GET['filter']=='city') {

  $sql = "SELECT * FROM company WHERE cities='$_GET[search]'";

  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    while($row1 = $result->fetch_assoc()) {
      $sql1 = "SELECT * FROM job_post WHERE id_company>='$row1[id_company]' LIMIT $start_from, $limit";
                $result1 = $conn->query($sql1);
                if($result1->num_rows > 0) {
                  while($row = $result1->fetch_assoc()) 
                  {
               ?>

         <div class="attachment-block clearfix">
                <img class="attachment-img" src="uploads/logo/<?php echo $row1['logo']; ?>" alt="Attachment Image">
                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a> <span class="attachment-heading pull-right">$<?php echo $row['maximumsalary']; ?>/Month</span></h4>
                  <div class="attachment-text">
                      <div><strong><?php echo $row1['companyname']; ?> | <?php echo $row1['city']; ?> | Experience <?php echo $row['experience']; ?> Years</strong></div>
                  </div>
                </div>
              </div>

      <?php
        }
      }
    }
  }
  //healthcaresector_employer, healthcaresector, companyName, minimumsalary, major, degree,
  //jobtype, jobtitle, jobfunction, cities, states, countries, experience
  //, , companyName, , , ,
  //, ,, , , 

} else {

  if(isset($_GET['filter']) && $_GET['filter']=='searchBar') {

    $search = $_GET['search'];
    $sql = "SELECT * FROM job_post WHERE jobtitle LIKE '%$search%' LIMIT $start_from, $limit";
    

  }else if(isset($_GET['filter']) && $_GET['filter']=='major') {
      
      $sql = "SELECT * FROM job_post WHERE major LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='degree') {
      
      $sql = "SELECT * FROM job_post WHERE degree LIKE '$_GET[search]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='countries') {
      
      $sql = "SELECT * FROM job_post WHERE countries LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='states') {
      
      $sql = "SELECT * FROM job_post WHERE states LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='cities') {
      
      $sql = "SELECT * FROM job_post WHERE cities LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  } else if(isset($_GET['filter']) && $_GET['filter']=='minimumsalary') {
      
      $sql = "SELECT * FROM job_post WHERE minimumsalary>='$_GET[filter]' LIMIT $start_from, $limit";
      
  }
  
  else if(isset($_GET['filter']) && $_GET['filter']=='experience') {

    $sql = "SELECT * FROM job_post WHERE experience>='$_GET[filter]' LIMIT $start_from, $limit";

  }else if(isset($_GET['filter']) && $_GET['filter']=='jobfunction') {
      
      $sql = "SELECT * FROM job_post WHERE jobfunction LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='jobtitle') {
      
      $sql = "SELECT * FROM job_post WHERE jobtitle LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }
  else if(isset($_GET['filter']) && $_GET['filter']=='jobtype') {
      
      $sql = "SELECT * FROM job_post WHERE jobtype LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='healthcaresector_employer') {
      
      $sql = "SELECT * FROM job_post WHERE healthcaresector_employer LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }else if(isset($_GET['filter']) && $_GET['filter']=='healthcaresector') {
      
      $sql = "SELECT * FROM job_post WHERE healthcaresector LIKE '$_GET[filter]' LIMIT $start_from, $limit";
      
  }
  

  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
                $result1 = $conn->query($sql1);
                if($result1->num_rows > 0) {
                  while($row1 = $result1->fetch_assoc()) 
                  {
               ?>

         <div class="attachment-block clearfix">
                <img class="attachment-img" src="uploads/logo/<?php echo $row1['logo']; ?>" alt="Attachment Image">
                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a> <span class="attachment-heading pull-right">$<?php echo $row['maximumsalary']; ?>/Month</span></h4>
                  <div class="attachment-text">
                      <div><strong><?php echo $row1['companyname']; ?> | <?php echo $row1['city']; ?> | Experience <?php echo $row['experience']; ?> Years</strong></div>
                  </div>
                </div>
              </div>

      <?php
        }
      }
    }
  }

}




$conn->close();