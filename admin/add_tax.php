<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$tax_id = $_GET['tax_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `tax` WHERE tax_id = '$tax_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$tax_name = $row['tax_name'];
		$tax_percentage = $row['tax_percentage'];
		$tax_status = $row['tax_status'];
	}
	else
	{
		$tax_name = $tax_percentage = $tax_status = "";
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
			  
			
    					
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> TAX</h3>
                <hr/>
				
                <form name="" method="post"  action="<?php echo (isset($update)?'tax_val.php?update&&tax_id='.$tax_id.' ':'tax_val.php?add'); ?>">
				<p>
                  <div class="form-group">
                    <label>Enter TAX Name</label>
                    <input type="text" value="<?php echo $tax_name; ?>" name="tax_name" class="form-control1" placeholder="TAX_ Name" required />
                  </div>

                  <div class="form-group">
                    <label>Enter TAX Percentage</label>
                    <input type="number" name="tax_percentage" value="<?php echo $tax_percentage; ?>" class="form-control1" placeholder="TAX Percentage" required />
                  </div>

                  <div class="form-group">
                    <label>Enter TAX Status</label>
					<select name="tax_status" class="form-control1">
					<?php
						if(isset($update))
						{
							echo '<option>'.$tax_status.'</option>';
							if($tax_status == 'Active')
							{
								echo '<option>InActive</option>';
							}
							else{
								echo '<option>Active</option>';
							}
						}
						else{
							echo '<option>Active</option>
									<option>InActive</option>';
						}
					?>
					</select>
							
                    
                  </div>

                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> TAX"> 
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
