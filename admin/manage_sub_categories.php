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
							<th>name</th>
							<th>staus</th>
							<th>action</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							include("connection.php");
							$sno=1;
							$sql=mysqli_query($con,"SELECT * FROM `sub_categories`") or die(mysqli_error($con));
							while($row=mysqli_fetch_array($sql)){
								echo '<tr>
										<td>'.$sno++.'</td>
										<td>'.$row['sub_name'].'</td>
										<td>'.$row['sub_status'].'</td>
										<td>
											<a href="add_sub_categories.php?sub_id='.$row['sub_id'].'&&edit" class="btn btn-info">EDIT</a>
											<a href="" data-href="cat_val.php?sub_id='.$row['sub_id'].'&&delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger">DELETE</a>
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
