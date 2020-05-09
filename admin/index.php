<!DOCTYPE HTML>
<html>
<head>
	<?php include("inc/head.php"); ?>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><!--img src="images/logo.png" alt=""/--></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post" action="">
		<input type="text" name="email" class="text" value="E-mail address" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" name="password" value="Password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit" ><input type="submit" name="btn_login" onclick="myFunction()" value="Login"></div>
		
		<ul class="new">
			<li class="new_left"><p><a href="recovery_pass.php">Forgot Password ?</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
	<?php
	include("connection.php");
	if(isset($_POST['btn_login'])){
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		
		$sql=mysqli_query($con,"SELECT * FROM  login WHERE email='$email' AND password='$password'")or(mysqli_error($con));
		$row=mysqli_fetch_array($sql);
		
		if($row)
		{
			session_start();
			$_SESSION['user_email']=$row['email'];
			$_SESSION['user_role']=$row['user_role'];
			
			header("location:home.php?logged_in");
			
		}
		else
		{
			echo '<h4 style="color:red;" class="text-center">Invalid email or password</h4>';
		}
	}
	?>
  </div>
   <?php include("inc/footer.php"); ?>
</body>
</html>
