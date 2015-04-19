<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
    $e_id = str_replace("'","\'",$_POST['e_id']);
    $fname = str_replace("'","\'",$_POST['fname']);
    $lname = str_replace("'","\'",$_POST['lname']);
    $email = str_replace("'","\'",$_POST['email']);
    $phone = str_replace("'","\'",$_POST['phone']);
    $company = str_replace("'","\'",$_POST['company']);

    $sql = "UPDATE tbl_employees ".
            "SET first_name = '$fname', last_name = '$lname', email = '$email', phone_number = '$phone', company = '$company' ".
            "WHERE employee_id = $e_id;" ;

    mysql_query($sql);

	session_start();
	if($_SESSION['usertype'] == 'admin'){
        header("location: /admin/accounts.php");
    }
	if($_SESSION['usertype'] == 'employee'){
        header("location: /employee/account.php");
    }
	if($_SESSION['usertype'] == 'resident'){
        header("location: /resident/account.php");
    }
?>
