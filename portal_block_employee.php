<?php
	session_start();
	if($_SESSION['usertype'] != 'employee'){
        header('location: /login.php');
    }
?>
