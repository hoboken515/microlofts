<?php
	session_start();
	
	// Display the home page navigation bar based on which user is logged in or if there is a user logged in
	if(isset($_SESSION['username'])){ //Logged in
		if($_SESSION['usertype'] == 'admin'){ // User of 'admin' type is logged in
			$portalPage = '/admin/';
		}
		else if($_SESSION['usertype'] == 'employee'){ // User of 'employee' type is logged in
			$portalPage = '/employee/';
		}
		else if($_SESSION['usertype'] == 'resident'){ // User of 'resident' type is logged in
			$portalPage = '/resident/';
		}
		
		echo'
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/about.php">About Us</a>
					</li>
					<li>
						<a href="/gallery/">Gallery</a>
					</li>
					<li>
						<a href="/contact.php">Contact Us</a>
					</li>
					<li>
						<a href="/availability/units.php">Units</a>
					</li>
					<li>
						<a href="'.$portalPage.'">User Portal</a>
					</li>
					<li>
						<a href="/signout.php">Sign Out</a>
					</li>
				</ul>
			</div>
		';
	}
	else{ // If no user is logged in
		echo'
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/about.php">About Us</a>
					</li>
					<li>
						<a href="/apply/index.php">Apply</a>
					</li>
					<li>
						<a href="/gallery/">Gallery</a>
					</li>
					<li>
						<a href="/contact.php">Contact Us</a>
					</li>
					<li>
						<a href="/availability/units.php">Units</a>
					</li>
					<li>
						<a href="/login.php">Login</a>
					</li>
				</ul>
			</div>
		';
	}
?>
