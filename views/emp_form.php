<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




	<title>Employee Details</title>
</head>
<body>

<div class="row">

<div class="col-offset-md-4 com-md-4 col-offset-md-4"> 
<div><h1 align="center">Add Employee</h1> </div>

			<form action="../services/emp_form_service.php" method="POST" class="form-group" class="form-group">
			<div align="center" style="padding-top: 5%;">
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

<input type="submit" name="empformsubmit" value="save">


        

			</form>
			</div>
			</div>
</div>
</body>
</html>