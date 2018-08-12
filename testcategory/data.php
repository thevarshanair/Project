<?php
 require 'DbConnect.php';

 function loadCategory(){
     $db= new DbConnect();
     $conn=$db->connect();
     $stmt=$conn->prepare("Select * FROM healthcarejobcategory");
     $stmt->execute();
     $category_type =$stmt->fetchAll(PDO::FETCH_ASSOC);
     return $category_type;
 }
?>