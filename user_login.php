<?php
	session_start();
	if(isset($_SESSION['username'])){ // Prevent a logged in user from accessing the login page
		header('location: /index.php');
	}
	else{
		require_once 'db_connect.php';
		
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if($user == '' || $pass == ''){
			header('location: login.php');
		}
		else{
			$userResult = mysql_query("SELECT username FROM users WHERE username = '$user'");
			$userRow = mysql_fetch_assoc($userResult);
			$username = $userRow['username'];
			$passResult = mysql_query("SELECT password FROM users WHERE username = '$user'");
			$passRow = mysql_fetch_assoc($passResult);
			$password = $passRow['password'];
			if($username == ''){ // Username not found
				header('location: login.php');
			}
			else if($password != $pass){ // Incorrect password
				header('location: login.php');
			}
			else { // Correct username and password
				$_SESSION['username'] = $username;
				
				$typeResult = mysql_query("SELECT type FROM users WHERE username = '$user'");
				$typeRow = mysql_fetch_assoc($typeResult);
				$userType = $typeRow['type'];
				$_SESSION['usertype'] = $userType;
					
				if($userType == 'admin'){
					header('location: /admin/');
				}
				else if($userType == 'employee'){
					header('location: /employee/');
				}
				else{
					header('location: /resident/');
				}
			}
		}
	}
?>