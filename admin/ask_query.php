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
        	<div class="col-md-12 widget widget1">
        	<h1><u>Ask Querys</u></h1>
			<div class="row">
				<div class="col-md-6">
					<form name="" method="post" action="query_val.php?add">
						<div class="form-group">
							<label>Enter the title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Enter Message</label>
							<textarea rows="4" name="message" class="form-control"></textarea>
						</div>
						
						<div class="form-group">
							<input type="submit" name="btn_ask_query" class="btn btn-primary btn-block" value="Ask Query">
						</div>
						
				</div>
				<div class="col-md-6">
					<?php 
						include("connection.php");
						$sql=mysqli_query($con,"SELECT * FROM `queries` WHERE user_id= '$login_id'")or die(mysqli_error($con));
						while($row = mysqli_fetch_array($sql))
						{
							echo '<div class="panel panel-default">
									<div class="panel-heading">
										<h4>'.$row['title'].'</h4>
									</div>
									<div class="panel-body">
										<p>'.nl2br($row['message']).'</p>';
										
										if($row['admin_replay'] == NULL)
										{
											echo '<p style="color:red;">Admin did not replay</p>';
										}
										else
										{
											echo '<p>'.nl2br($row['admin_replay']).'</p>';
										}
										echo '</div>
										<div class="panel-footer">
											<p>'.$row['query_date'].'</p>
										</div>
									</div>';
						}
						?>
				</div>
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
