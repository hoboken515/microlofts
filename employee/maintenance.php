<?php include '/home/frankencluster/public_html/group01/portal_block_employee.php';?>
<html>
<head>
<title>View Maintenance Requests | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
    include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<h1 class="header">View Maintenance Requests</h1>
    
<center>

<?php 
    include '/home/frankencluster/public_html/group01/cgi-bin/maintenance_requests_fetch.php' 
?>
<br>

</center>

</body>
</html>
