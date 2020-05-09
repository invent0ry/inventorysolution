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
              <div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Title</th>
							<th>Description</th>
							<th>Image</th>
							<th>Price</th>
							<th>Quality</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							include("connection.php");
							$sno=1;
							$sql=mysqli_query($con,"SELECT * FROM `products`") or die(mysqli_error($con));
							while($row=mysqli_fetch_array($sql)){
								echo '<tr>
										<td>'.$sno++.'</td>
										<td>'.$row['product_title'].'</td>
										<td>'.$row['product_desc'].'</td>
										<td>'.$row['product_image'].'</td>
										<td>'.$row['product_price'].'</td>
										<td>'.$row['product_qty'].'</td>
										<td>'.$row['product_status'].'</td>
										<td>
											<a href="add_products.php?product_id='.$row['product_id'].'&&edit" class="btn btn-info">EDIT</a>
											<a href="" data-href="prd_val.php?product_id='.$row['product_id'].'&&delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger">DELETE</a>
										</td>
										
								</tr>';
								
							}
							
						?>
					</tbody>
				</table>
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
