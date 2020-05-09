<?php include("inc/session.php"); ?> 
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
                <h3>Add New Supervisor</h3>
                <hr/>
                <form name="" method="post" action="man_val.php?add">
                  <div class="form-group">
                    <label>Enter Supervisor Name</label>
                    <input type="text" name="Manager_name" class="form-control1" placeholder="Supervisor_ Name">
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor Email</label>
                    <input type="email" name="Manager_email" class="form-control1" placeholder="Supervisor_ Email">
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor Phone</label>
                    <input type="number" name="Manager_phone" class="form-control1" placeholder="Supervisor_ Phone">
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor Photo</label>
                    <input type="file" name="Manager_photo" class="form-control1" placeholder="Supervisor_ Photo"></textarea>
                  </div>


                  <div class="form-group">
                    <label>Enter Supervisor Pan</label>
                    <input type="text" name="manager_pan" class="form-control1" placeholder="Supervisor Pan">
                  </div>

                  <div class="form-group">
                    <label>Enter Supervisor aadhar</label>
                    <textarea rows="4" name="manager_aadhar" class="form-control1" placeholder="Supervisor Aadhar"></textarea>
                  </div>
				  
                  <div class="form-group">
                    <label>Enter warehouse name</label>
                    <input type="text" name="warehouse_name" class="form-control1" placeholder="warehouse name"></textarea>
                  </div>
				  
                  <div class="form-group">
                    <label>Enter Supervisor password</label>
                    <textarea rows="4" name="manager_password" class="form-control1" placeholder="Supervisor Password"></textarea>
                  </div>


                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value="Add New Supervisor_">
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
