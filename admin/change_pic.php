<?php
	include("connection.php");
	include("inc/session.php");
	error_reporting(0);
	if (isset($_POST['change_pic'])) {


		$sql = mysqli_query($con, "SELECT * FROM `login` WHERE email = '$user_email'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);

		$profile = "images/profiles/".$row['profile_pic'];
		unlink($profile);


		$file = rand(1000,100000)."-".$_FILES['photo']['name'];
	    $file_loc = $_FILES['photo']['tmp_name'];
		$file_size = $_FILES['photo']['size'];
		$file_type = $_FILES['photo']['type'];
		$folder="images/profiles/";
		
		// new file size in KB
		$new_size = $file_size/2048;  
		// new file size in KB
		
		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case
		
		$final_file=str_replace(' ','-',$new_file_name);
		
		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$query = mysqli_query($con,"UPDATE `login` SET profile_pic = '$final_file' WHERE email = '$user_email'") or die(mysqli_error($con));
			echo '<script>
					alert("Profile Changed Successsfully...");
					window.location.href="profile.php";
				</script>';

		}
		# code...
	}

?>