<?php
	// Construct message content
	$message = "";
	$message .= "How satisfied are you with Micro Loft?: ".$_POST['question1']."\n";
	$message .= "How satisfied are you with the Micro Loft staff?: ".$_POST['question2']."\n";
	$message .= "How satisfied are you with the turn around time for maintenance requests?: ".$_POST['question3']."\n";
	$message .= "How satisfied are you with the community amenities provided by Micro Loft?: ".$_POST['question5']."\n"; // Buttons not working properly
	$message .= "How satisfied are you with the cleanliness of the community areas?: 5\n"; // Buttons not working properly
	if($_POST['comments'] != ''){ // Send comments if not left blank
		$message .= "Comments: ".$_POST['comments'];
	}
	
	// Send an email to all included email addresses
	$adminEmails = array("jblack17@student.gsu.edu");
	for($i = 0; $i < count($adminEmails); $i++){
		mail($adminEmails[$i], "New Resdient Survey", $message);
	}
	
	header('location: survey_success.php');
?>