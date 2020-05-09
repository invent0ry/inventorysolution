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
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							include("connection.php");
							$sno=1;
							$sql=mysqli_query($con,"SELECT * FROM `warehouse`") or die(mysqli_error($con));
							while($row=mysqli_fetch_array($sql)){
								echo '<tr>
										<td>'.$sno++.'</td>
										<td>'.$row['warehouse_name'].'</td>
										<td>'.$row['warehouse_email'].'</td>
										<td>'.$row['warehouse_phone'].'</td>
										<td>'.$row['warehouse_address'].'</td>
										<td>
											<a href="add_warehouse.php?warehouse_id='.$row['warehouse_id'].'&&edit" class="btn btn-info">EDIT</a>
											<a href="" data-href="war_val.php?warehouse_id='.$row['warehouse_id'].'&&delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger">DELETE</a>
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
