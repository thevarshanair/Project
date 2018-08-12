<html>

<head>
<title>
</title>
<script type="text/javascript">
$(document).ready(function(){
	$("#division_id").on('click', function(){
		var division_id = (this).val();
			if(division_id){
				$ajax({
					type: 'POST',
					  url:'ajaxData.php', //gameCreateform.attr( 'action' ),
					  dataType: 'POST',
					  data: 'category_id='+ category_id,
					  success: function( html ) {
					  $("#"hcsubcategory_id).empty();
					  $("#"+selector).append($('<option></option>').val(0).html("Please Select"));
						 $.each(response, function (key, value) {
							$("#"+selector).append($('<option></option>').val(value.id).html(value.name));
					})
				}
		}
}
</script>
</head>
<body>

<form action="">

<div class="form-group">
<select class="form-control input-lg" name="category_id" id="category_id">
<option value="">Select Healthcare category</option>
<?php 
//$query =$db->query(SELECT * FROM healthcarejobcategory order by name acs);
$rowCount= $query->num_rows;
if(rowCount>0){
    while ($row=$query-> fetch_assoc()){
 //       echo '<option value="'.$row['category_id'].'">.$row['name'].'</option>';
    }
}else {
    echo "No Category found";
}
?>
</select>
</div>
</form>
</body>
</html>