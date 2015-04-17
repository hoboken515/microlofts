<?php
	session_start();
	if($_SESSION['usertype'] != 'resident'){
        header('location: /login.php');
    }
?>
