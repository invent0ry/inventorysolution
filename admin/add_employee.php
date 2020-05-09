<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$emp_id = $_GET['emp_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `employee` WHERE emp_id = '$emp_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$emp_name = $row['emp_name'];
		$emp_email = $row['emp_email'];
		$emp_phone = $row['emp_phone'];
		$emp_photo = $row['emp_photo'];
		$emp_pan = $row['emp_pan'];
		$emp_aadhar = $row['emp_aadhar'];
		$emp_password = $row['emp_password'];
	}
	else
	{
		$emp_name = $emp_email = $emp_phone = $emp_photo = $emp_pan = $emp_aadhar = $emp_password = "";
	}	
?> 
<!DOCTYPE HTML>
<html>
  <head>
  
     <?php include("inc/head.php"); ?> 
  </head>
  <body>
  
    <div id="wrapper">
      <!-- Navigation -->
      <?php include("inc/menu.php"); ?>
      <div id="page-wrapper">
        <div class="graphs">
       	  <div class="col_3">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
			  
			
    					
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> Employee</h3>
                <hr/>
				
                <form name="" method="post"  action="<?php echo (isset($update)?'emp_val.php?update&&cat_id='.$emp_id.' ':'emp_val.php?add'); ?>"
				 oninput='emp_cpassword.setCustomValidity(emp_cpassword.value != emp_password.value ? "Passwords do not match." : "")'>
				<p>
                  <div class="form-group">
                    <label>Enter Employee Name</label>
                    <input type="text" value="<?php echo $emp_name; ?>" name="emp_name" class="form-control1" placeholder="Employee_ Name" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Employee Email</label>
                    <input type="email" name="emp_email" value="<?php echo $emp_email; ?>" class="form-control1" placeholder="Employee_ Email" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Employee Phone</label>
                    <input type="number" name="emp_phone" value="<?php echo $emp_phone; ?>" class="form-control1" placeholder="Employee_ Phone" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Employee Photo</label>
                    <input type="file" name="emp_photo" value="<?php echo $emp_photo; ?>" class="form-control1" placeholder="Employee_ Photo" required /></textarea>
                  </div>


                  <div class="form-group">
                    <label>Enter Employee Pan</label>
                    <input type="text" name="emp_pan" value="<?php echo $emp_pan; ?>" class="form-control1" placeholder="Employee Pan" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Employee aadhar</label>
                    <textarea rows="4" name="emp_aadhar"  class="form-control1" placeholder="Employee Aadhar" required /><?php echo $emp_aadhar; ?></textarea>
                  </div>
				  
				  
                  <div class="form-group">
                    <label>Enter Employee password</label>
                    <input type="password"  name="emp_password" id="pass" class="form-control1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
					 title="Must contain at least one number and one uppercase and lowercase letter,
					and at least 8 or more characters" placeholder="Employee Password" required /></textarea>
                  </div>
				  
				  <div class="form-group">
                    <label>Conform password</label>
                    <input type="password" name="emp_cpassword" id="cpass" class="form-control1"  placeholder="conform password"  />
					
                  <div>

                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> Employee"> 
                  </div>


                </form>
              </div>
            </div>
  		      <div class="clearfix"> </div>
  	      </div>
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
