<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';

    $resident = $_POST['resident_id'];
    echo $resident;
    $question1 = $_POST['question1'];
    echo $question1;
    $question2 = $_POST['question2'];
    echo $question2;
    $question3 = $_POST['question3'];
    echo $question3;
    $question4 = $_POST['question4'];
    echo $question4;
    $question5 = $_POST['question5'];
    echo $question5;
    $comments = str_replace("'","\'",$_POST['comments'];

    $sql = "INSERT INTO tbl_surveys (resident_id, q1_answer, q2_answer, q3_answer, q4_answer, q5_answer, comments) ".
        "VALUES ($resident, $question1, $question2, $question3, $question4, $question5, '$comments');";
    echo $sql;

	// Construct message content
	$message = "";
	$message .= "How satisfied are you with Micro Loft?: $question1\n";
	$message .= "How satisfied are you with the Micro Loft staff?: $question2\n";
	$message .= "How satisfied are you with the turn around time for maintenance requests?: $question3\n";
	$message .= "How satisfied are you with the community amenities provided by Micro Loft?: $question4\n"; // Buttons not working properly
	$message .= "How satisfied are you with the cleanliness of the community areas?: $question5\n"; // Buttons not working properly
	if($_POST['comments'] != ''){ // Send comments if not left blank
        $message .= "Comments: "
	}
	
	// Send an email to all included email addresses
	$adminEmails = array("jblack17@student.gsu.edu","joseph.bontecou@bobcats.gcsu.edu");
	for($i = 0; $i < count($adminEmails); $i++){
		mail($adminEmails[$i], "New Resdient Survey", $message);
	}
	
    $sql = "INSERT INTO tbl_surveys (resident_id, q1_answer, q2_answer, q3_answer, q4_answer, q5_answer, comments) ".
        "VALUES ($resident, $question1, $question2, $question3, $question4, $question5, '$comments');";

    $mysql_query($sql);

	header('location: survey_success.php');
?>
