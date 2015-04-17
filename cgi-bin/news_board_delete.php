<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
    $timestamp = str_replace("'","\'",$_POST['timestamp']);

    $sql = "DELETE FROM tbl_news WHERE timestamp='$timestamp';";
    mysql_query($sql);

	session_start();
	if($_SESSION['usertype'] == 'admin'){
        header("location: /admin/index.php");
    }
	if($_SESSION['usertype'] == 'employee'){
        header("location: /employee/index.php");
    }
	if($_SESSION['usertype'] == 'resident'){
        header("location: /resident/index.php");
    }
?>
