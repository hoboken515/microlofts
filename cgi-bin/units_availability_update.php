<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    $unit_id = str_replace("'","\'",$_POST['unit_id']);
    $addr_line1 = str_replace("'","\'",$_POST['addr_line1']);
    $addr_line2 = str_replace("'","\'",$_POST['addr_line2']);
    $fplan = str_replace("'","\'",$_POST['type']);
    $price = str_replace("'","\'",$_POST['price']);
    $avail = str_replace("'","\'",$_POST['availability']);
    if ($avail == 'Available!!!'){
        $availability = '1';
    }else{
        $availability = '0';
    }
    $comments = str_replace("'","\'",$_POST['comments']);

    $sql = "UPDATE tbl_units ".
            "SET address_line1 = '$addr_line1', address_line2 = '$addr_line2',type = '$fplan', rent_price = '$price', is_available = $availability, comments = '$comments' ".
            "WHERE unit_id = $unit_id;" ;

    mysql_query($sql);

    session_start();
    if($_SESSION['usertype'] == 'admin'){
        header("location: /admin/inventory.php");
    }
    if($_SESSION['usertype'] == 'employee'){
        header("location: /employee/account.php");
    }
    if($_SESSION['usertype'] == 'resident'){
        header("location: /resident/account.php");
    }
?>
