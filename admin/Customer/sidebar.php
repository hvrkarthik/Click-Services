   <!-- Sidebar Tabs -->
                    <div class="sidebar-tabs-con">
                        <ul class="sidebar-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#side-tab-menu"><i class="glyphicon-list"></i></a>
                            </li>
                            <li>
                                <a href="#side-tab-extra"><i class="glyphicon-user"></i></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="side-tab-menu">
                                <!-- Primary Navigation -->
                                <nav id="primary-nav">
                                    <ul>
                                        <li>
                                            <a href="home.php" class=" active"><i class="glyphicon-display"></i>Dashboard</a>
                                        </li>
										
										<li>
                                            <a href="view_customer.php" class=" active"><i class="glyphicon-display"></i>My Profle</a>
                                        </li>
										
										
										 <li>
                                            <a href="view_services.php" class=" active"><i class="glyphicon-display"></i>Services</a>
                                        </li>
										
										
										 <li>
                                            <a href="view_request.php" class=" active"><i class="glyphicon-display"></i>Requests</a>
                                        </li>
										<li>
                                            <a href="view_ratings.php" class=" active"><i class="glyphicon-display"></i>Ratings</a>
                                        </li>
										<li>
                                            <a href="change_password.php" class=" active"><i class="glyphicon-display"></i>Change Password</a>
                                        </li>
										 <li>
                                            <a href="../logout.php" class=" active"><i class="glyphicon-display"></i>Logout</a>
                                        </li>
                                       
                                    </ul>
                                </nav>
                                <!-- END Primary Navigation -->
                            </div>
                            <div class="tab-pane tab-pane-side" id="side-tab-extra">
                                <h5><i class="icon-briefcase pull-right"></i>Balance</h5>
                                <div class="side-stat text-center text-info"><strong>$25.230,<small>00</small></strong></div>

                                <h5><i class="icon-dollar pull-right"></i>Earnings (today)</h5>
                                <div class="side-stat text-center text-info"><strong>$1.752,<small>00</small></strong></div>

                                <h5><i class="icon-shopping-cart pull-right"></i>Sales (today)</h5>
                                <div class="side-stat text-center text-info"><strong>368</strong></div>

                                <h5><i class="icon-shopping-cart pull-right"></i>Sales (this month)</h5>
                                <div class="side-stat text-center text-success"><strong>+38%</strong></div>

                                <h5><i class="icon-ticket pull-right"></i>Open Tickets</h5>
                                <div class="side-stat text-center text-warning"><strong>23</strong></div>

                                <h5><i class="icon-bug pull-right"></i>Bugs to fix</h5>
                                <div class="side-stat text-center text-error"><strong>1</strong> (important)</div>
                                <div class="side-stat text-center text-warning"><strong>3</strong> (normal)</div>
                            </div>
                        </div>
                    </div>
                    <!-- END Sidebar Tabs -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </aside>
            <!-- END Left Sidebar -->
            <!-- Pre Page Content -->
			
			<?php
			$uname=$_SESSION['uname']; ?>
			
            <div id="pre-page-content">
                <h1><i class="glyphicon-dashboard themed-color"></i>Dashboard<br><small>Welcome <strong><?php echo $uname; ?></strong>, everything looks good!</small></h1>
            </div>
            <!-- END Pre Page Content -->




