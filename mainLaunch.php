<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Buffer Now | Cacaded Select Box</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<p>
<b>Healthcare List:</b>&nbsp;<select name="mainList" id="mainList" >
<option value="">Please select:</option></select>&nbsp;
<b>Healthcare Category: </b>&nbsp;<select name="category" id="category"  >
<option value="">Please select:</option></select>&nbsp;
<b>Healthcare Subcategory:</b>&nbsp;<select name="subcategory" id="subcategory" >
<option value="">Please select:</option></select>
</p>
</body>
<script>
$( document ).ready(function() {

	populate("mainList.php",{},"mainList");

	
	$('#mainList').change(function () {
		 let data = {category_id : $(this).val() } ;
	
		 populate("category.php",data,"category");		 
	 });
	 
	 
	$('#category').change(function () {	
			
		 let data = {state_id : $(this).val() } ;
		
		 populate("subcategory.php",data,"subcategory");	 
	 });
		 
   function populate(ajaxUrl,data,selector){   
	 $.ajax( {
			  type: "POST",
			  url:ajaxUrl, //gameCreateform.attr( 'action' ),
			  dataType: 'json',
			  data: data,
			  success: function( response ) {
			  $("#"+selector).empty();
			  $("#"+selector).append($('<option></option>').val(0).html("Please Select"));
				 $.each(response, function (key, value) {
					$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
				});
	
			  }
			});   
   }	
   
});
</script>
</html> 