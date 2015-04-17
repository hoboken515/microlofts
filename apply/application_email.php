<?php
	// Construct message content
	$message = "";
	$message .= "Applicant: ".$_POST['fname']." ".$_POST['lname']."\n";
	$message .= "Email Address: ".$_POST['email']."\n";
	$message .= "Phone Number: ".$_POST['phone']."\n";
	$message .= "Date of Birth: ".$_POST['birth']."\n";
	$message .= "Requested Move In Date: ".$_POST['movein']."\n";
	$message .= "Apartment Type: ".$_POST['type'];
	
	// Send an email to all included email addresses
	$adminEmails = array("jblack17@student.gsu.edu", "joseph.bontecou@bobcats.gcsu.edu");
	for($i = 0; $i < count($adminEmails); $i++){
		mail($adminEmails[$i], "New Unit Application", $message);
	}
	
	header('location: /apply/apply_success.php');
?>