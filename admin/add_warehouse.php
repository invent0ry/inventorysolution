<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$warehouse_id = $_GET['warehouse_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `warehouse` WHERE warehouse_id = '$warehouse_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$warehouse_name = $row['warehouse_name'];
		$warehouse_email = $row['warehouse_email'];
		$warehouse_phone = $row['warehouse_phone'];
		$warehouse_address = $row['warehouse_address'];
		
	}
	else
	{
		$warehouse_name = $warehouse_email = $warehouse_phone = $warehouse_address =  "";
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
                <h3><?php echo (isset($update)?'Update':'Add New'); ?>Add New Warehouse</h3>
                <hr/>
                <form name="" method="post" action="<?php echo (isset($update)?'war_val.php?update&&warehouse_id='.$warehouse_id.' ':'war_val.php?add'); ?>">
                  <div class="form-group">
                    <label>warehouse name</label>
                    <input type="text" value="<?php echo $warehouse_name; ?>" name="warehouse_name" class="form-control1" placeholder="warehouse Name" required />
                  </div>

                  <div class="form-group">
                    <label>Enter warehouse Email</label>
                    <input type="email" name="warehouse_email" value="<?php echo $warehouse_email; ?>" class="form-control1" placeholder="warehouse Email" required / >
                  </div>

                  <div class="form-group">
                    <label>Enter warehouse Phone</label>
                    <input type="number" name="warehouse_phone" value="<?php echo $warehouse_phone; ?>" class="form-control1" placeholder="warehouse Phone" required />
                  </div>

                  <div class="form-group">
                    <label>Enter warehouse Address</label>
                    <textarea rows="4" name="warehouse_address" value="<?php echo $warehouse_address; ?>" class="form-control1" placeholder="warehouse Address" required /></textarea>
                  </div>




                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> Supervisor"> >
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
