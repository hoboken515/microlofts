<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
 
    $u_id = str_replace("'","\'",$_POST['u_id']);
    $fname = str_replace("'","\'",$_POST['fname']);
    $lname = str_replace("'","\'",$_POST['lname']);
    $email = str_replace("'","\'",$_POST['email']);

    $sql = "UPDATE tbl_admins ".
            "SET first_name = '$fname', last_name = '$lname', email = '$email' ".
            "WHERE user_id = $u_id;" ;

    mysql_query($sql);

    session_start();
    if($_SESSION['usertype'] == 'admin'){
        header("location: /admin/accounts.php");
    }
    if($_SESSION['usertype'] == 'employee'){
        header("location: /employee/accounts.php");
    }
    if($_SESSION['usertype'] == 'resident'){
        header("location: /resident/accounts.php");
    }
?>
