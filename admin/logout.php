<?php

	session_start();
	session_unset();

	$conn=mysqli_connect("localhost","root","","job_portal","3306");

	$query = mysqli_query($conn, "select * from admin_login where admin_email = '{$_SESSION['email']}' and admin_type = '2' ");

	if ($query){
		header('location:http://localhost/online-job-portal-master/index.php');
	}
	else{
		header('location:admin_login.php');

	}
?>