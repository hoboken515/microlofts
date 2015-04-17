<?php include '/home/frankencluster/public_html/group01/portal_access_block.php';?>
<html>
<head>
<title>Manage Maintenance Requests | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<h1 class="header">Manage Maintenance Requests</h1>
	
<center>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/maintenance_requests_fetch.php' ?>
<br>

</center>

</body>
</html>
