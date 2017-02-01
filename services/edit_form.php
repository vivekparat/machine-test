<?php
include("../config/database.php");

$id2=$_GET['id'];



if(isset($_POST['empformsubmit']))
{
	$emp_name=$_POST['emp_name'];
	$emp_phone=$_POST['emp_phone'];
	$emp_email=$_POST['emp_email'];
	$gender=$_POST['gender'];
	$hobbies=$_POST['hobbies'];
	$emp_pic=$_POST['emp_pic'];
	$emp_country=$_POST['country'];

foreach ($hobbies as $hobbys => $val) {
	
}

$update=mysqli_query($con,("update SET empdetails name='$emp_name',phone='$emp_phone',email='$emp_email',gender='$gender',hobbies='$val',profilepic='$emp_pic',country='$emp_country' where id='$id2'"));






}




	

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Employee</title>
</head>
<body>





<form action="" method="POST" class="form-group" class="form-group">


			<div align="center" style="padding-top: 5%;">

<title>Edit Employee</title>


			Name
<input type="text" name="emp_name" placeholder="Name" required="required">
<p>
Phone
<input type="text" name="emp_phone" placeholder="Phone Number" required="required">
</p>
<p>
Email
<input type="text" name="emp_email" placeholder="Email" required="required">
</p>
<p>Male<input type="radio" name="gender" value="male">
female<input type="radio" name="gender" value="female"></p>


<p>hobbies
<input type="checkbox" name="hobbies[]" value="Listening to Music">
<input type="checkbox" name="hobbies[]" value="Reading">
<input type="checkbox" name="hobbies[]" value="Browsing">
<input type="checkbox" name="hobbies[]" value="Playing">
</p>
<p>
profile pic
<input type="file" name="emp_pic">
</p>
<p>
country
<select name="country">
<option value=""> Select Country</option>
	<option value="india"> India</option>
	<option value="china"> china</option>
	<option value="UAE"> UAE</option>

</select>
</p>

<input type="submit" name="empformsubmit" value="Update">


</body>
</html>