<?php
header('Access-Control-Allow-Origin: *');

$type = $_REQUEST['type'];

switch($type){
	
	case "categories" :
	 require_once("categories.php");
	break;
	
	case  "subcategory" :
	 require_once("subcategory.php");
	break;
	
	case  "subcategorytype" :
	 require_once("subcategorytype.php");
	break;
	
	default :
	 require_once("categories.php");
	break;
}
?>