<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$faq_question=mysqli_real_escape_string($con,$_POST['faq_question']);
		$faq_answer=mysqli_real_escape_string($con,$_POST['faq_answer']);
		
		$sql=mysqli_query($con,"INSERT INTO `faq`(`faq_question`, `faq_answer`) 
		VALUES ('$faq_question','$faq_answer')")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_faq.php?ins_success&&data=Category");
		}
	}
	else if(isset($_GET['update'])){
		$faq_id = $_GET['faq_id'];
		$faq_question=mysqli_real_escape_string($con,$_POST['faq_question']);
		$faq_answer=mysqli_real_escape_string($con,$_POST['faq_answer']);
		
		$sql=mysqli_query($con,"UPDATE `faq` SET  `faq_question`='$faq_question',
		`faq_answer`='$faq_answer' WHERE `faq_id`='$faq_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_faq.php?upd_success&&data=Category");
		}	
	}
	else if(isset($_GET['delete'])){
		$faq_id=$_GET['faq_id'];
		$sql=mysqli_query($con,"DELETE FROM `faq` WHERE faq_id='$faq_id'")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_faq.php?del_success&&data=Category");
		}
	}
?>