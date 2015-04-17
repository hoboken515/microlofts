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
	$adminEmails = array("jblack17@student.gsu.edu","joseph.bontecou@bobcats.gcsu.edu");
	for($i = 0; $i < count($adminEmails); $i++){
		mail($adminEmails[$i], "New Resdient Survey", $message);
	}

    $sql = "INSERT INTO tbl_surveys (resident_id, q1_answer, q2_answer, q3_answer, q4_answer, q5_answer, comments) ".
        "VALUES (1,".$_POST['question1'].",".$_POST['question2'].",".$_POST['question3'].",".$_POST['question5'].",5,'".$_POST['comments']."');";

    mysql_query($sql);
	
	header('location: survey_success.php');
?>
