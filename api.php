<?php
header('Access-Control-Allow-Origin: *');

$type = $_REQUEST['type'];

switch($type){
	
	case "mainList" :
	 require_once("mainList.php");
	break;
	
	case  "category" :
	 require_once("category.php");
	break;
	
	case  "subcategory" :
	 require_once("subcategory.php");
	break;
	
	default :
	 require_once("mainList.php");
	break;
}
?>