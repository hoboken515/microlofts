<?php
	session_start();
	if($_SESSION['usertype'] == 'admin'){
		echo'
			<div class="navig">
				<ul class="nav">
					<li class="nav"><a href="/index.php"> Micro Loft Home </a></li>
					<li class="nav"><a href="/admin/index.php"> News Board </a></li>
					<li class="nav"><a href="/admin/accounts.php"> Accounts </a></li>
					<li class="nav"><a href="/admin/inventory.php"> Unit Inventory </a></li>
					<li class="nav"><a href="/admin/reminder.php"> Rent Reminder </a></li>
					<li class="nav"><a href="/admin/man_requests.php"> Maintenance Requests </a></li>
					<li class="nav"><a href="/signout.php"> Sign Out </a></li>
				</ul>
			</div>
		';
	}
	else if($_SESSION['usertype'] == 'employee'){
		echo'
			<div class="navig">
				<ul class="nav">
					<li class="nav"><a href="/index.php"> Micro Loft Home </a></li>
					<li class="nav"><a href="/employee/"> News Board </a></li>
					<li class="nav"><a href="/employee/maintenance.php"> Maintenance Requests </a></li>
					<li class="nav"><a href="/employee/account.php"> Account </a></li>
					<li class="nav"><a href="/signout.php"> Sign Out </a></li>
				</ul>
			</div>
		';
	}
	else if($_SESSION['usertype'] == 'resident'){
		echo'
			<div class="navig">
				<ul class="nav">
					<li class="nav"><a href="/index.php"> Micro Loft Home </a></li>
					<li class="nav"><a href="/resident/index.php"> News Board </a></li>
					<li class="nav"><a href="/resident/pay.php"> Pay Rent </a></li>
					<li class="nav"><a href="/resident/maintenance.php"> Maintenance Request </a></li>
					<li class="nav"><a href="/resident/account.php"> Account </a></li>
					<li class="nav"><a href="/resident/survey.php"> Survey </a></li>
					<li class="nav"><a href="/signout.php"> Sign Out </a></li>
				</ul>
			</div>
		';
	}	
?>
