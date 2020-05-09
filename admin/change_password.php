<?php include("inc/session.php"); ?> 
<!DOCTYPE HTML>
<html>
<head>
   <?php include("inc/head.php"); ?> 
</head>
<body>
<?php
		include("connection.php");
		if(count($_POST)>0) {

        $result = "SELECT * from login WHERE email='$user_email'";
		$m=mysqli_query($con, $result);
		$row=mysqli_fetch_array($m);
		if($_POST["currentPassword"] == $row["password"]) {
		$e="UPDATE login set password='" . $_POST["newPassword"]. "' WHERE email='$user_email'";
		$res=mysqli_query($con, $e);
		$message = "Password Changed";
		} else $message = "Current Password is not correct";
		}
	?>
<div id="wrapper">
     <!-- Navigation -->
        <?php include("inc/menu.php"); ?>
        <div id="page-wrapper">
        <div class="graphs">

     	<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
											<?php if(isset($message)) {
												echo '<div class="alert alert-info">'.$message.'</div>'; 
												}
											?>
											<table class="table table-striped">
												
												<tr>
													<td width="40%"><label> Current Password </label></td>
													<td width="60%"><input type="password" name="currentPassword" data-validation="required" class="form-control"/><span id="currentPassword"  class="required"></span></td>
												</tr>
												<tr>
													<td><label> New Password </label></td>
													<td><input type="password" name="newPassword" data-validation="required" class="form-control"/><span id="newPassword" class="required"></span></td>
												</tr>
												<tr>
													<td><label> Confirm Password </label></td>
													<td><input type="password" name="confirmPassword" data-validation="required" class="form-control"/><span id="confirmPassword" class="required"></span></td>
												</tr>
												<tr>
													<td colspan="2"><input type="submit" name="submit" value="Change Password" class="btn btn-primary btn-block"></td>
												</tr>
											</table>
											
										</form>
									</div>
								</div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      
		<div class="clearfix"> </div>
	    </div>
		<?php include("inc/footer.php"); ?>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <?php include("inc/bottom.php"); ?>
</body>
</html>
