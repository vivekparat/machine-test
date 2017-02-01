<?php

include("../config/database.php");
if(isset($_POST['empformsubmit']))
{
	$emp_name=$_POST['emp_name'];
	$emp_phone=$_POST['emp_phone'];
	$emp_email=$_POST['emp_email'];
	$gender=$_POST['gender'];
	$hobbies=$_POST['hobbies'];
	$emp_pic=$_POST['emp_pic'];
	$emp_country=$_POST['country'];

foreach ($hobbies as $hobbys => $val) 




// if ($_FILES["emp_pic"]["name"] {
        

//         $move = "../services/pic";
//           echo $_FILES["emp_name"]['name']."<br>";
//           echo $_FILES["emp_name"]['tmp_name']."<br>";
//           echo $_FILES["emp_name"]['size']."<br>";
//           echo $_FILES['emp_name']['error']."<br>";
//           move_uploaded_file($_FILES['emp']['name'], $move);
//       }


		$insert_query=mysqli_query($con,("insert into empdetails(name,phone,email,gender,hobbies,profilepic,country)values('$emp_name','$emp_phone','$emp_email','$gender','$val','$emp_pic','$emp_country')"));

		if($insert_query)
		{
		
?>

	<script type="text/javascript">
		
		window.location="../services/emp_table_details.php";
	</script>
	<?php

		}






	echo $emp_name;
	echo $emp_phone;
	echo $emp_email; 
	echo $gender;
	echo $emp_pic;
	echo $emp_country;
	
}

?>