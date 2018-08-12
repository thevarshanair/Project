<?php
require_once("DbConnect.php");

$sth = $dbh->prepare("SELECT * FROM healthcare_subcategory where category_id ='".$_REQUEST['category_id']."'");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>