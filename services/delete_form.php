<?php
include("../config/database.php");

$id2=$_GET['id'];

echo $id2;




$delete=mysqli_query($con,("delete from empdetails where id='$id2'"));

if($delete)
{
	?>

	<script type="text/javascript">
		
		window.location="../services/emp_table_details.php";
	</script>
	<?php
}


?>