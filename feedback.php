<?php 
ob_start(); 
require 'config.php';

$address=$_POST['address'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$feedback1 = $_POST['feedback1'];



$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `address`, `feedback`,`feedback1`, `suggestions`) VALUES ('','$name','$email','$address','$feedback','$feedback1','$comments')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';



/*$query1 = "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'";
$result_query1 = mysqli_query($conn, $query1);
$count_query1 = mysqli_num_rows($result_query1);
/*if ($count_query1 != 0) 
	{
    header("Location: controller/staff.php");
	exit();
	} 
else {
		    $query2 = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
			$result_query2 = mysqli_query($conn, $query2);
			$count_query2 = mysqli_num_rows($result_query2);
			$count_query2 = mysqli_num_rows($result_query2);
			if ($count_query2!=0) 
			{
		   		header("Location: controller/admin.php");
				exit();
		   	} 		
		   	else
		   	 {
		   	 	echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';

			 }

	}

//echo $email;
//echo '</br>';
//echo $password;



ob_end_flush();*/
?>