<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Inventory Management System</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
					
					<?php
												if($user_profile == "")
												{
													echo '<img src="images/smile.png" class="img-responsive" width="60" height="60">';
												}
												else
												{
													echo '<img src="images/profiles/'.$user_profile.'" class="img-responsive" width="60" height="60">';
												}
											?>
					
					
					
					
					<span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
 						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
					
									<li class="m_2"><a href="profile.php"><i class="fa fa-shield"></i> Profile</a></li>
									<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
									<li class="m_2"><a href="change_password.php"><i class="fa fa-lock"></i> Change Password</a></li> ';
						
				</ul>
			</li>
			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
						<?php
											if($user_role == 'admin')
											{
                        
                       echo  '<li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Supervisor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_supervisor.php">Add Supervisor</a>
                                </li>
                                <li>
                                    <a href="supervisor.php">Manage Supervisor</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Warehouse<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_warehouse.php">Add Warehouse</a>
                                </li>
                                <li>
                                    <a href="manage_warehouse.php">Manage Warehouse</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_categories.php">Add Catrgories</a>
                                </li>
                                <li>
                                    <a href="manage_categories.php">Manage Catrgories</a>
                                </li>
                            </ul>
							<li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Sub Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_sub_categories.php">Add Sub Catrgories</a>
                                </li>
                                <li>
                                    <a href="manage_sub_categories.php">Manage Sub Catrgories</a>
                                </li>
                            </ul>
								<li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>TAX<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_tax.php">Add TAX</a>
                                </li>
                                <li>
                                    <a href="tax.php">Manage TAX</a>
                                </li>
							</ul>
							<li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>FAQ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_FAQ.php">FAQ</a>
                                </li>
                                <li>
                                    <a href="manage_faq.php">Manage FAQ</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="stock.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Stock</a>
                        </li>
						  
                          <li>
                            <a href="queries.php"><i class="fa fa-dashboard fa-fw nav_icon"></i> Replay Queries</a>
                        </li>
                    
                    </ul> ' ;
											}
					else if($user_role == 'supervisor')
					{
						echo  '<li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>employee<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_employee.php">Add employee</a>
                                </li>
                                <li>
                                    <a href="manage_employee.php">Manage employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_products.php">Add product</a>
                                </li>
                                <li>
                                    <a href="manage_products.php">Manage product</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="ask_query.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Queries</a>
                        </li>
                          
                          <li>
                            <a href="queries.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>FAQ</a>
                        </li>
                                                </li>
                            <!-- /.nav-second-level -->
                        </li>


						

                    
                    </ul> ' ;
					}
					else {
						 echo '                       <li>
                            <a href="ask_query.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Queries</a>
                        </li>
                          
                          <li>
                            <a href="queries.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>FAQ</a>
                        </li>
                                                </li>
                            <!-- /.nav-second-level -->
                        </li>';
					}
					?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>