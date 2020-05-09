<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$sub_id = $_GET['sub_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `sub_categories` WHERE sub_id = '$sub_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$sub_name = $row['sub_name'];
		$sub_status = $row['sub_status'];
	}
	else
	{
		$sub_name = $sub_status = "";
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
			  
			 
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> Sub Categories</h3>
                <hr/>
                <form name="" method="post" action="<?php echo (isset($update)?'sub_val.php?update&&sub_id='.$sub_id.' ':'sub_val.php?add'); ?>">
                  <div class="form-group">
                    <label>Enter Sub Categories Name</label>
                    <input value="<?php echo $sub_name; ?>" type="text" name="sub_name" class="form-control1" placeholder="Categories Name" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Sub Categories Status</label>
					<select name="sub_status" class="form-control1">
					<?php
						if(isset($update))
						{
							echo '<option>'.$sub_status.'</option>';
							if($sub_status == 'Active')
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
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> Categories">
                  </div>


                </form>
              </div>
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
