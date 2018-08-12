<?php
//To Handle Session Variables on This Page
session_start();
if(empty($_SESSION['id_company'])) {
    header("Location: ../index.php");
    exit();
}
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");

//if user Actually clicked Add Post Button
if(isset($_POST)) {
    
    // New way using prepared statements. This is safe from SQL INJECTION. Should consider to update to this method when many people are using this method.
    /***
    healthcaresector, healthcaresector_employer, jobfunction, jobtitle, companyname, countries, states, cities, zipcode,
    jobtype, minimumsalary, maximumsalary,negotiable, postdate, startdate, name, email, contactno, streetaddress, appdeadline,
    degree, major, experience, description
    //issssssssssssssssssssssss
    ******/
    /***
      $sql = " INSERT INTO job_post(id_company,healthcaresector, healthcaresector_employer, jobfunction, jobtitle, companyname, countries, states, cities, zipcode,
    jobtype, minimumsalary, maximumsalary,negotiable, postdate, startdate, name, email, contactno, streetaddress, appdeadline, degree, major, experience, description) VALUES 
    ('$_SESSION['id_company']', '$healthcaresector', '$healthcaresector_employer', '$jobfunction', '$jobtitle', '$companyname', '$countries', '$states', '$cities', '$zipcode' ,
        '$jobtype', '$minimumsalary', '$maximumsalary', '$negotiable', '$postdate', '$startdate', '$firstname', $lastname','$email', '$contactno', '$streetaddress', '$appdeadline', 
        '$degree', '$major', '$experience', '$description')";
    
     * ****/
    
     $stmt = $conn->prepare("INSERT INTO job_post(id_company,healthcaresector, jobfunction, jobtitle, companyname, countries, states, cities, zipcode, jobtype, 
                                                   minimumsalary, maximumsalary,negotiable, postdate, startdate, firstname, lastname, email, contactno, streetaddress, appdeadline, 
degree, major, experience, description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
     $stmt->bind_param("issssssssssssssssssssssss", $_SESSION['id_company'], '$healthcaresector',  '$jobfunction', '$jobtitle', '$companyname', '$countries', '$states', '$cities', '$zipcode',
         '$jobtype', '$minimumsalary', '$maximumsalary', '$negotiable', '$postdate', '$startdate', '$firstname', '$lastname','$email', '$contactno', '$streetaddress', '$appdeadline',
        '$degree', '$major', '$experience', '$description');
    
    $healthcaresector = mysqli_real_escape_string($conn, $_POST['healthcaresector']);
    $healthcaresector_employer  = mysqli_real_escape_string($conn, $_POST['healthcaresector_employer']);
    $jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
    $jobfunction = mysqli_real_escape_string($conn, $_POST['jobfunction']);
    $companyname = mysqli_real_escape_string($conn, $_POST['companyname']); 
    $countries = mysqli_real_escape_string($conn, $_POST['countries']);
    $states = mysqli_real_escape_string($conn, $_POST['states']);
    $cities = mysqli_real_escape_string($conn, $_POST['cities']);
    $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $jobtype = mysqli_real_escape_string($conn, $_POST['jobtype']);
    $minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
    $maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
    $negotiable =  $_POST['negotiable'];
    $postdate = mysqli_real_escape_string($conn, $_POST['postdate']);
    $startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
    $streetaddress = mysqli_real_escape_string($conn, $_POST['streetaddress']);
    $appdeadline = mysqli_real_escape_string($conn, $_POST['appdeadline']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);    
    $description = mysqli_real_escape_string($conn, $_POST['description']);
   if($_POST[$negotiable]==false){
        $negotiable = (string)$negotiable;        
    }else if($_POST[$negotiable]==true){
        $negotiable = (string)$negotiable;
    }
  
    if($stmt->execute()) {
        //If data Inserted successfully then redirect to dashboard
        $_SESSION['jobPostSuccess'] = true;
        header("Location: index.php");
        exit();
    } else {
        //If data failed to insert then show that error. Note: This condition should not come unless we as a developer make mistake or someone tries to hack their way in and mess up :D
        echo "Error ";
    }
    
    $stmt->close(); 
    
/*     
    //THIS IS NOT SAFE FROM SQL INJECTION BUT OK TO USE WITH SMALL TO MEDIUM SIZE AUDIENCE
    $healthcaresector = mysqli_real_escape_string($conn, $_POST['healthcaresector']);
    $healthcaresector_employer  = mysqli_real_escape_string($conn, $_POST['healthcaresector_employer']);
    $jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
    $jobfunction = mysqli_real_escape_string($conn, $_POST['jobfunction']);
   // $companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
    $countries = mysqli_real_escape_string($conn, $_POST['countries']);
    $states = mysqli_real_escape_string($conn, $_POST['states']);
    $cities = mysqli_real_escape_string($conn, $_POST['cities']);
    $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $jobtype = mysqli_real_escape_string($conn, $_POST['jobtype']);
    $minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
    $maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
    $negotiable = $_POST['negotiable'];
    $postdate = $_POST['postdate'];
    $startdate = $_POST['startdate'];
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $contactno = $_POST['contactno'];
    $streetaddress = $_POST['streetaddress'];
    $appdeadline = $_POST['appdeadline'];
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $id_company = $_SESSION['id_company'];
    
    //Insert Job Post Query
     $sql = " INSERT INTO job_post(id_company,healthcaresector, healthcaresector_employer, jobfunction, jobtitle, countries, states, cities, zipcode,
    jobtype, minimumsalary, maximumsalary,negotiable, postdate, startdate, name, email, contactno, streetaddress, appdeadline, degree, major, experience, description)VALUES
('$id_company', 
'$healthcaresector', '$healthcaresector_employer', '$jobfunction', '$jobtitle', '$countries', '$states', '$cities', '$zipcode' ,
'$jobtype', '$minimumsalary', '$maximumsalary', '$negotiable', '$postdate', '$startdate', '$name', '$email', '$contactno', '$streetaddress', '$appdeadline', '$degree', '$major', '$experience', '$description')";
    
     if($conn->query($sql)===TRUE) {
    // 	//If data Inserted successfully then redirect to dashboard
     	$_SESSION['jobPostSuccess'] = true;
     	header("Location: index.php");
     	exit();
     } else {
    // 	//If data failed to insert then show that error. Note: This condition should not come unless we as a developer make mistake or someone tries to hack their way in and mess up :D
     	echo "Error " . $sql . "<br>" . $conn->error;
     }
    
     */
    
    //Close database connection. Not compulsory but good practice.
    $conn->close();
    
} else {
    //redirect them back to dashboard page if they didn't click Add Post button
    header("Location: review.php");
    exit();
}