<?php
	session_start();
	$_SESSION=array();
	session_unset($_SESSION['user_email']);
	header("location:index.php?logged_out");
	
?>