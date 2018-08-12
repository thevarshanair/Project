<?php
header('Access-Control-Allow-Origin: *');

$type = $_REQUEST['type'];

switch($type){
	
	case "countries" :
	 require_once("healthcarejobcategory.php");
	break;
	
	case  "states" :
	 require_once("healthcare_subcategory.php");
	break;
	
	case  "cities" :
	 require_once("healthcaresub_sub.php");
	break;
	
	default :
	 require_once("healthcarejobcategory.php");
	break;
}
?>