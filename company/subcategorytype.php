<?php
require_once("db-config.php");

$sth = $dbh->prepare("SELECT * FROM healthcaresub_sub where hcsubcategory_id ='".$_REQUEST['hcsubcategory_id']."'");
$sth->execute();

$result = $sth->fetchAll();
echo json_encode($result);die;
?>