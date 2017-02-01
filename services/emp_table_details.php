<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form>
	<table>
		<tr>
			<td>SL Number</td>
			<td>Pic</td>
			<td>Name</td>
			<td>Phone</td>
			<td>Email</td>
			<td>Action</td>

			</tr>
<?php
include("../config/database.php");


$sel=mysqli_query($con,("select * from empdetails"));

while($fet=mysqli_fetch_array($sel))
{
	?>


<tr>
	<td><?php echo $empid=$fet['id']; ?></td>
	<td><!-- <?php echo $fet['profilepic'];?> --></td>
	<td><?php echo $fet['name'];?></td>
	<td><?php echo $fet['phone'];?></td>
    <td><?php echo $fet['email'];?></td>
    <td>
    	<td> <a href="../services/edit_form.php?id=<?php echo $empid; ?>">Edit </a> </td>
    	<td><a href="../services/delete_form.php?id=<?php echo $empid;?>"> Delete </a></td>

    </td>
</tr>

	</table>


	<?php
}
?>

</form>

</body>
</html>