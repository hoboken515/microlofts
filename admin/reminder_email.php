<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
	// Construct message content
	$message = "";
	$message .= "Hello ".$_POST['fname']." ".$_POST['lname'].",\n\n";
	$message .= "This email is to remind you that you owe ".$_POST['amount']." for Unit ".$_POST['unit'].".";
	$message .= "This amount is due on ".$_POST['date'].".  Please make the payment as soon as possible.\n\n";
	$message .= "Thank you,\n Micro Loft Administration";
	
	$emailInput = $_POST['email'];
	$emailResult = mysql_query("SELECT email FROM tbl_residents WHERE email = '$emailInput'");
	$emailRow = mysql_fetch_assoc($emailResult);
	$email = $emailRow['email'];
	
	if($email != ''){ // Only send the email if the email exists in the table of residents
		mail($email, "Rent Reminder", $message);
		header('location: reminder_success.php');
	}
	else{
		// TODO - Create error message
		header('location: reminder.php');	
	}	
?>