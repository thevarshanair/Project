<?php
require_once("DbConnect.php");

$sth = $dbh->prepare("SELECT * FROM healthcarejobcategory");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>