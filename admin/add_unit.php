<?php
    ini_set('display_errors',1);  
    error_reporting(E_ALL);
    session_start();
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    $unit = $_POST['unit'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $comments = $_POST['comments'];
    
    if($unit != '' && $type != '' && $price != '' && $status != ''){
        $price = floatval($price); // Convert string value to double
        if($status == 'Available'){ // Convert string value to boolean
            $status = 1;
        }
        else{
            $status = 0;
        }
        mysql_query("INSERT INTO tbl_units (address_line1, address_line2, city, state, zip, type, rent_price, is_available, comments) VALUES ('Line 1', '$unit', 'Atlanta', 'Georgia', '30303', '$type', '$price', '$status', '$comments')");
        header('location: inventory_success.html');
    }
    else{
        // Handle error
    }
?>
