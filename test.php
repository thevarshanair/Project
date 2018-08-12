<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Engineering Job in Healthcare</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo logo-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EJH</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Engineering Jobs in Healthcare</b> </span>
    </a>

    <div id="center" class="cascade">

 <?php

 $sql = "SELECT * FROM countries";

 $query = mysqli_query($conn, $sql);

 ?>

 <label>Country:

 <select name="country" id = "id">

 <span id="IL_AD6" class="IL_AD">option value</span>="">Please Select</option>

 <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC )) { ?>

 <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>

 <?php } ?>

 </select>

 </label>

 </div>

 <div class="cascade" id="state"></div>

 <div id="city" class="cascade"></div>

 </div>

</p>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script>

$(document).ready(function(){

$("select#drop1").change(function(){

var country_id = $("select#drop1 option:selected").attr('value');

// alert(country_id);

 $("#state").html( "" );

 $("#city").html( "" );

 if (country_id.length > 0 ) {

 $.ajax({

 type: "POST",

 url: "state.php",

 data: "country_id="+country_id,

 cache: false,

 beforeSend: function () {

 $('#state').html('<img src="loader.gif" alt="" width="24" height="24">');

 },

 success: function(html) {

 $("#state").html( html );

 }

 });

 }

});

});

</script>
</body>
</html>
