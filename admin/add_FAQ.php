<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$faq_id = $_GET['faq_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `faq` WHERE faq_id = '$faq_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$faq_question = $row['faq_question'];
		$faq_answer = $row['faq_answer'];
		}
	else
	{
		$faq_question = $faq_answer = "";
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
			  
			
    					
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> FAQ</h3>
                <hr/>
				
                <form name="" method="post"  action="<?php echo (isset($update)?'faq_val.php?update&&faq_id='.$faq_id.' ':'faq_val.php?add'); ?>">
				<p>
				
                  <div class="form-group">
                    <label>Enter FAQ Question</label>
                    <textarea rows="4" name="faq_question"  class="form-control1" placeholder="FAQ Question" required /><?php echo $faq_question; ?></textarea>
                  </div>
				  
				  
                  <div class="form-group">
                    <label>Enter FAQ Answer</label>
                    <textarea rows="4" name="faq_answer"  class="form-control1" placeholder="FAQ Answer" required /><?php echo $faq_answer; ?></textarea>
                  </div>
				  
                  <div class="form-group">
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> FAQ"> 
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
