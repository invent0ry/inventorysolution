<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$cat_id = $_GET['cat_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `categories` WHERE cat_id = '$cat_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$cat_name = $row['cat_name'];
		$cat_status = $row['cat_status'];
	}
	else
	{
		$cat_name = $cat_status = "";
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
			  
			 
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> Categories</h3>
                <hr/>
                <form name="" method="post" action="<?php echo (isset($update)?'cat_val.php?update&&cat_id='.$cat_id.' ':'cat_val.php?add'); ?>">
                  <div class="form-group">
                    <label>Enter Categories Name</label>
                    <input value="<?php echo $cat_name; ?>" type="text" name="cat_name" class="form-control1" placeholder="Categories Name" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Categories Status</label>
					<select name="cat_status" class="form-control1">
					<?php
						if(isset($update))
						{
							echo '<option>'.$cat_status.'</option>';
							if($cat_status == 'Active')
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
