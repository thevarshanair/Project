<?php
//Encrypt Password
//$password = base64_encode(strrev(md5($password)));
?>
<html>
<head>
</head>
<body>
<input type="text" name="pass">
<?php 
$pass ="";
echo "<script>console.log('$pass')</script>";
//base64_decode(strrev(md5($str)));
md5(strrev(base64_decode($pass)));
echo("". $pass ."");
?>
</body>
</html>