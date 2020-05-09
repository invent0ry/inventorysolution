<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$cat_name=mysqli_real_escape_string($con,$_POST['cat_name']);
		$cat_status=mysqli_real_escape_string($con,$_POST['cat_status']);
		
		$sql=mysqli_query($con,"INSERT INTO `categories`(`cat_name`, `cat_status`) 
		VALUES ('$cat_name','$cat_status')")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_categories.php?ins_success&&data=Category");
		}
	}
	else if(isset($_GET['update'])){
		$cat_id = $_GET['cat_id'];
		$cat_name=mysqli_real_escape_string($con,$_POST['cat_name']);
		$cat_status=mysqli_real_escape_string($con,$_POST['cat_status']);
		
		$sql=mysqli_query($con,"UPDATE `categories` SET 
		`cat_name`='$cat_name',
		`cat_status`='$cat_status' WHERE `cat_id`='$cat_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_categories.php?upd_success&&data=Category");
		}	
	}
	else if(isset($_GET['delete'])){
		$cat_id=$_GET['cat_id'];
		$sql=mysqli_query($con,"DELETE FROM `categories` WHERE cat_id='$cat_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_categories.php?del_success&&data=Category");
		}
	}
?>