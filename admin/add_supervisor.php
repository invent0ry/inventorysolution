<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$manager_id = $_GET['manager_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `manager` WHERE manager_id = '$manager_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$manager_name = $row['manager_name'];
		$manager_email = $row['manager_email'];
		$manager_phone = $row['manager_phone'];
		$manager_photo = $row['manager_photo'];
		$manager_pan = $row['manager_pan'];
		$manager_aadhar = $row['manager_aadhar'];
		$manager_password = $row['manager_password'];
	}
	else
	{
		$manager_name = $manager_email = $manager_phone = $manager_photo = $manager_pan = $manager_aadhar = $manager_password = "";
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
			  
			
    					
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> Supervisor</h3>
                <hr/>
				
                <form name="" method="post"  action="<?php echo (isset($update)?'sup_val.php?update&&cat_id='.$manager_id.' ':'sup_val.php?add'); ?>"
				 oninput='sup_cpassword.setCustomValidity(sup_cpassword.value != sup_password.value ? "Passwords do not match." : "")'>
				<p>
                  <div class="form-group">
                    <label>Enter Supervisor Name</label>
                    <input type="text" value="<?php echo $manager_name; ?>" name="sup_name" class="form-control1" placeholder="Supervisor_ Name" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor Email</label>
                    <input type="email" name="sup_email" value="<?php echo $manager_email; ?>" class="form-control1" placeholder="Supervisor_ Email" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor Phone</label>
                    <input type="number" name="sup_phone" value="<?php echo $manager_photo; ?>" class="form-control1" placeholder="Supervisor_ Phone" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor Photo</label>
                    <input type="file" name="sup_photo" value="<?php echo $manager_photo; ?>" class="form-control1" placeholder="Supervisor_ Photo" required /></textarea>
                  </div>


                  <div class="form-group">
                    <label>Enter Supervisor Pan</label>
                    <input type="text" name="sup_pan" value="<?php echo $manager_pan; ?>" class="form-control1" placeholder="Supervisor Pan" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor aadhar</label>
                    <textarea rows="4" name="sup_aadhar" value="<?php echo $manager_aadhar; ?>" class="form-control1" placeholder="Supervisor Aadhar" required /></textarea>
                  </div>
				  
                  <div class="form-group">
                    <label for="warehouse">Select a Warehouse :</label>

					<select id="warehouse" name="warehouse_id" class="form-control1"  >
					<?php
							include("connection.php");
							$sno=1;
							$sql=mysqli_query($con,"SELECT * FROM `warehouse` WHERE warehouse_id NOT IN (SELECT warehouse_id FROM `manager`)") or die(mysqli_error($con));
							while($row=mysqli_fetch_array($sql)){
									echo "<option value='" . $row['warehouse_id'] . "'>" . $row['warehouse_name'] . "</option> ";
								
							}
							
						?>
					</select>
                  </div>
				  
                  <div class="form-group">
                    <label>Enter Supervisor password</label>
                    <input type="password"  name="sup_password" id="pass" class="form-control1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
					 title="Must contain at least one number and one uppercase and lowercase letter,
					and at least 8 or more characters" placeholder="Supervisor Password" required /></textarea>
                  </div>
				  
				  <div class="form-group">
                    <label>Conform password</label>
                    <input type="password" name="sup_cpassword" id="cpass" class="form-control1"  placeholder="conform password"  />
					
                  <div>

                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> Supervisor"> 
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
