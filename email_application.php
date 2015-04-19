<?php
	// Construct message content
	$message = "";
	$message .= "New Application Inquiry:\n\n";

    $message .= "*Applicant Info*\n";
    $message .= "Name: ".$_POST['fname']." ".$_POST['lname']."\n";
	$message .= "Email: ".$_POST['email']."\n";
	$message .= "Phone: ".$_POST['phone']."\n";
	$message .= "Date of Birth: ".$_POST['birth']."\n";
    $message .= "Desired Move-in Date: ".$_POST['movein']."\n";
    $message .= "Desired Floor Plan: ".$_POST['type']."\n";

	$email_to = "joseph.bontecou@bobcats.gcsu.edu";
	$email_from = "From:joseph.bontecou@bobcats.gcsu.edu";
	
	$retval = mail ($email_to, "New Application!", $message, $email_from);
	if($retval == true)
		header('location: /apply/apply_success.php');
	}
	else{
		header('location: /apply/apply_failure.php');	
	}	
?>
