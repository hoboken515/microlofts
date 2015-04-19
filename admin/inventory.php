<?php include '/home/frankencluster/public_html/group01/portal_access_block.php';?>
<html>
<head>
<title>Unit Inventory | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">Manage Unit Inventory</h1>
<center>	
<h2> Update Units </h2>
<br>
<?php 
include '/home/frankencluster/public_html/group01/cgi-bin/units_availability_fetch.php'
?>
</center>
</div>
</body>

</html>
