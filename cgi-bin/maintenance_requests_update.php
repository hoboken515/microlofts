<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    $updated_status = str_replace("'","\'",$_POST['status']);
    $request_id = str_replace("'","\'",$_POST['request_id']);

    $sql = "UPDATE tbl_maint_requests ".
            "SET status = '$updated_status' ".
            "WHERE maint_request_id = $request_id;" ;

    mysql_query($sql);

    session_start();
    if($_SESSION['usertype'] == 'admin'){
        header("location: /admin/maintenance.php");
    }
    if($_SESSION['usertype'] == 'employee'){
        header("location: /employee/maintenance.php");
    }
    if($_SESSION['usertype'] == 'resident'){
        header("location: /resident/maintenance.php");
    }
?>
