<?php
    session_start();
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    $currentUser = $_SESSION['username'];
    // Obtain the primary key
    $result = mysql_query("SELECT tbl_residents.resident_id
        FROM group01db.tbl_residents tbl_residents
            INNER JOIN group01db.users users ON (tbl_residents.user_id = users.user_id)
        WHERE (users.username = '$currentUser')");
    $resultRow = mysql_fetch_assoc($result);
    $id = $resultRow['resident_id'];
        
    $area = $_POST['area'];
    $description = $_POST['description'];
    
    mysql_query("INSERT INTO tbl_maint_requests (resident_id, unit_area, description) VALUES ($id, '$area', '$description')");
    
    header('location: maintenance_success.php');
?>
