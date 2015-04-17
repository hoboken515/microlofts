<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
    $topic = str_replace("'","\'",$_POST['new_topic']);
    $comment = str_replace("'","\'",$_POST['new_comment']);

    $sql = "INSERT INTO tbl_news (topic_name, comments) VALUES ('$topic', '$comment');";
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
