<?Php
require "config.php"; // connection details
//require "../../include/z_db1_demo.php"; // Database Connection 


error_reporting(0);// With this no error reporting will be there
//////////
/////////////////////////////////////////////////////////////////////////////
$category_id=$_POST['category_id'];// 
$hci_id=$_POST['hci_id']; /// State Id 
//$category_id='CAN'; // To check you can use this
//$hci_id=5;
///////////// Validate the inputs ////////////
// Checking country variable ///
if((strlen($category_id)) > 0 and (!ctype_alpha($category_id))){ 
echo "Data Error";
exit;
}
// Checking state variable (with space ) ///

if ((strlen($hci_id)) > 0 and is_numeric($hci_id) === false) {
echo "Data Error";
exit;
}

/////////// end of input validation //////

if(strlen($category_id) > 0){
$q_country="select state,hci_id from healthcarejobcategory where category_id = :category_id";
}

//echo $q_country;
$sth = $dbo->prepare($q_country);
$sth->bindParam(':category_id',$category_id,PDO::PARAM_STR, 15);
$sth->execute();
$state = $sth->fetchAll(PDO::FETCH_ASSOC);
//print_r($state);
$q_state="select city_id,city from healthcarejobcategory where ";
if(strlen($hci_id) > 0){
$q_state= $q_state . " hci_id = :hci_id ";
}
$sth = $dbo->prepare($q_state);
$sth->bindParam(':hci_id',$hci_id,PDO::PARAM_STR, 25);

$sth->execute();
$city = $sth->fetchAll(PDO::FETCH_ASSOC);

$main = array('bci_group'=>$bci_group,'dshci_group'=>$dshci_group,'value'=>array("bci_group1"=>"$bci_group1","dshci_group1"=>"$dshci_group1"));


echo json_encode($main); 

////////////End of script /////////////////////////////////////////////////////////////////////////////////
?>