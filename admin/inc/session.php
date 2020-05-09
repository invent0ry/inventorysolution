<?php
	ob_start();
	ob_clean();
	include("connection.php");
	session_start();
	if(isset($_SESSION['user_email']))
	{
		$login_email=$_SESSION['user_email'];
		$sql=mysqli_query($con,"SELECT * FROM `login` WHERE email='$login_email'") or die(mysqli_error($con));
		$rw=mysqli_fetch_array($sql);
		$user_name=$rw['name'];
		$user_role=$rw['user_role'];
		$user_id=$rw['id'];
		$user_profile=$rw['profile_pic'];
		$user_email=$rw['email'];
		$user_phone=$rw['phone'];
		$login_id=$rw['login_id'];
	}
	else
	{
		header("location:index.php?login_first");
	}
		
?>