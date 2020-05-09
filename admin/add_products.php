<?php 
	include("inc/session.php"); 
	include("connection.php"); 
	
	if(isset($_GET['edit']))
	{
		$update = $_GET['edit'];
		$product_id = $_GET['product_id'];
		
		$sql = mysqli_query($con, "SELECT * FROM `products` WHERE product_id = '$product_id'") or die(mysqli_error($con));
		$row = mysqli_fetch_array($sql);
		
		$product_title = $row['product_title'];
		$product_desc = $row['product_desc'];
		$product_image = $row['product_image'];
		$product_price = $row['product_price'];
		$product_qty = $row['product_qty'];
		$product_status = $row['product_status'];
		
	}
	else
	{
		$product_title = $product_desc = $product_image = $product_price = $product_qty = $product_status =  "";
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
			  
			
    					
                <h3> <?php echo (isset($update)?'Update':'Add New'); ?> Product</h3>
				<hr/>
              
                <form name="" method="post"  action="<?php echo (isset($update)?'prd_val.php?update&&cat_id='.$product_id.' ':'prd_val.php?add'); ?>">
				 
                  <div class="form-group">
                    <label>Enter Product Title</label>
                    <input type="text" value="<?php echo $product_title; ?>" name="product_title" class="form-control1" placeholder="Product title" required />
                  </div>
					
					<div class="form-group">
                    <label>Enter Product  Description</label>
                    <textarea rows="4" name="product_desc"  class="form-control1" placeholder="Product Description" required /><?php echo $product_desc; ?></textarea>
                  </div>
				 

                  <div class="form-group">
                    <label>Enter Product image</label>
                    <input type="file" name="product_image" value="<?php echo $product_image; ?>" class="form-control1" placeholder="Product Image" required /></textarea>
                  </div>


                  <div class="form-group">
                    <label>Enter Product Price</label>
                    <input type="number" name="product_price" value="<?php echo $product_price; ?>" class="form-control1" placeholder="Product Price" required />
                  </div>
				  
				  <div class="form-group">
                    <label>Enter Product Quality</label>
                    <input type="number" name="product_qty" value="<?php echo $product_qty; ?>" class="form-control1" placeholder="Product Quality" required />
                  </div>

                  <div class="form-group">
                    <label>Enter Product Status</label>
					<select name="product_status" class="form-control1">
					<?php
						if(isset($update))
						{
							echo '<option>'.$product_status.'</option>';
							if($product_status == 'Active')
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
                    <input type="submit" name="btn_add" class="btn btn-success btn-block" value=" <?php echo (isset($update)?'Update':'Add New'); ?> Product"> 
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
