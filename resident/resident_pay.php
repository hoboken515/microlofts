<?php
	session_start();
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
	$currentUser = $_SESSION['username'];
	// Obtain the primary key and balance from the currently logged in user
	$result = mysql_query("SELECT tbl_residents.resident_id, tbl_residents.account_balance
		FROM group01db.tbl_residents tbl_residents
			INNER JOIN group01db.users users ON (tbl_residents.user_id = users.user_id)
		WHERE (users.username = '$currentUser')");
	$resultRow = mysql_fetch_assoc($result);
	$id = $resultRow['resident_id'];
	$balance = $resultRow['account_balance'];	
	
	$payment = floatval($_POST['amount']); // Convert the entered value into a double/float
	$balance = $balance - $payment;
	
	mysql_query("UPDATE tbl_residents SET account_balance=$balance WHERE resident_id=$id"); // Update user balance
	
	header('location: pay_success.php');
?>