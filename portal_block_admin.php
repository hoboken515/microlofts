<?php
	session_start();
	if($_SESSION['usertype'] != 'admin'){
        header('location: /login.php');
    }
?>
