<?php
require_once("db.php");

$sth = $dbh->prepare("SELECT * FROM healthcarejobcategory");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>