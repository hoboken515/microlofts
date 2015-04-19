<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
	$accountType = $_POST['type'];
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$phoneNumber = $_POST['phone'];
	$email = $_POST['email'];
	$unitNumber = $_POST['unit'];
	$companyName = $_POST['company'];
	$department = $_POST['depart'];
	
	$name = $firstName.$lastName;
	$loop = true;
	$number = 0;
		
	// Continue to increment the number at the end of the username until it does not match another entry in the database
	while($loop == true){
		$userResult = mysql_query("SELECT username FROM users WHERE username = '$name'");
		$userRow = mysql_fetch_assoc($userResult);
		$username = $userRow['username'];
		if($username == ''){ // User not found
			$loop = false;
		}
		else{
			$number = $number + 1;
			$name = $firstName.$lastName.$number; // Append the new number at the end of the potential username 
		}
	}
	
	$password = (string)rand(100000, 999999); // Generate a random 6 digit password
	
	$success = false;
	if($accountType == 'Tenant'){
		mysql_query("INSERT INTO users (username, password, type) VALUES ('$name', '$password', 'resident')");
		
		$result = mysql_query("SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1"); // Obtain the user_id of the user that was just created
		$resultRow = mysql_fetch_assoc($result);
		$userId = $resultRow['user_id'];
		
		$result = mysql_query("SELECT unit_id FROM tbl_units WHERE address_line2 = '$unitNumber'"); // Obtain the unit_id based on the unit name input
		$resultRow = mysql_fetch_assoc($result);
		$unitId = $resultRow['unit_id'];
		
		if($unitId != ''){
			mysql_query("INSERT INTO tbl_residents (user_id, unit_id, first_name, last_name, email, phone_number) VALUES ($userId, $unitId, '$firstName', '$lastName', '$email', '$phoneNumber')"); // Insert the user into the database
			$success = true;
		}
		else{ // Unit not found
			// Generate error message
		}
	}
	else if($accountType == 'Employee'){
		mysql_query("INSERT INTO users (username, password, type) VALUES ('$name', '$password', 'employee')");
		$result = mysql_query("SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1");
		$resultRow = mysql_fetch_assoc($result);
		$userId = $resultRow['user_id'];
		
		mysql_query("INSERT INTO tbl_employees (user_id, first_name, last_name, email, phone_number, company) VALUES ($userId, '$firstName', '$lastName', '$email', '$phoneNumber', '$companyName')");
		$success = true;
	}
	else{
		mysql_query("INSERT INTO users (username, password, type) VALUES ('$name', '$password', 'admin')");
		$result = mysql_query("SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1");
		$resultRow = mysql_fetch_assoc($result);
		$userId = $resultRow['user_id'];
		
		mysql_query("INSERT INTO tbl_admins (user_id, first_name, last_name, email) VALUES ($userId, '$firstName', '$lastName', '$email')");
		$success = true;
	}
	
	if($success == true){
		// Construct message content
		$message = "";
		$message .= "Welcome to Micro Loft!  Here are your credentials for our web application:\n\n";
		$message .= "Username: ".$name."\n";
		$message .= "Password: ".$password."\n\n";
		$message .= "We hope to see you soon!\nMicro Loft Administration";
		
		mail($email, "New Account Created", $message);
		
		header('location: accounts_success.php');
	}
	else{
		header('location: accounts.php');
	}
?>