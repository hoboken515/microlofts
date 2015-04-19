<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
    $r_id = str_replace("'","\'",$_POST['r_id']);
    $fname = str_replace("'","\'",$_POST['fname']);
    $lname = str_replace("'","\'",$_POST['lname']);
    $email = str_replace("'","\'",$_POST['email']);
    $phone = str_replace("'","\'",$_POST['phone']);
    $balance = str_replace("'","\'",$_POST['balance']);

    if($_SESSION['usertype'] == 'admin'){
        $sql = "UPDATE tbl_residents ".
                "SET first_name = '$fname', last_name = '$lname', email = '$email', phone_number = '$phone', account_balance = '$balance' ".
                "WHERE resident_id = $r_id;" ;
    }else{
        $sql = "UPDATE tbl_residents ".
                "SET email = '$email', phone_number = '$phone' ".
                "WHERE resident_id = $r_id;" ;
    }

    mysql_query($sql);

	session_start();
	if($_SESSION['usertype'] == 'admin'){
        header("location: /admin/accounts.php");
    }
	if($_SESSION['usertype'] == 'employee'){
        header("location: /employee/accounts.php");
    }
	if($_SESSION['usertype'] == 'resident'){
        header("location: /resident/account.php");
    }
?>
