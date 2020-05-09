<?php
	include("connection.php");
	if(isset($_GET['add'])){
		$passwd=mysqli_real_escape_string($con,$_POST['sup_password']);
		$cpassd=mysqli_real_escape_string($con,$_POST['sup_cpassword']);
		if ($passwd == $cpassd ){
			echo "password matches <br />";
		}
		else
			echo '<h4 style="color:red;" class="text-center">Invalid email or password</h4><br />';
		
	}
	
	//sleep(10);
	//header("location:http://localhost/InventoryManagementSystem/admin/add_supervisor.php");
		/*$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$manager_name=mysqli_real_escape_string($con,$_POST['manager_name']);
		$answer=mysqli_real_escape_string($con,$_POST['answer']);
		
		$sql=mysqli_query($con,"INSERT INTO `faq`(`faq_question`, `faq_answer`) VALUES ('$question','$answer')")or die(mysqli_error($con));
		
		if($sql){
			header("location:manage_categories.php?ins_success&&data=Category");
		}
	}
	else if(isset($_GET['update'])){
	
	}
	else if(isset($_GET['delete'])){
	
	}*/
?>