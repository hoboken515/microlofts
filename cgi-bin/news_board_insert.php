<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    $topic = str_replace("'","\'",$_POST['new_topic']);
    $comment = str_replace("'","\'",$_POST['new_comment']);

    session_start();
    $user_id_sql = ("SELECT user_id FROM users WHERE username = '".$_SESSION['username']."'");
    $user_id_result = mysql_query($user_id_sql);
    $user_id_row = mysql_fetch_assoc($user_id_result);  
    $user_id = $user_id_row['user_id'];

    $sql = "INSERT INTO tbl_news (topic_name, comments, user_id) VALUES ('$topic', '$comment', $user_id );";
    mysql_query($sql);

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
