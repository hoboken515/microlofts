<?php include '/home/frankencluster/public_html/group01/portal_block_resident.php';?>
<html>
<head>
<title>Resident Account | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
    include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<h1 class="header">Resident Account</h1>
<center>

<?php 
    include '/home/frankencluster/public_html/group01/cgi-bin/accounts_residents_fetch.php' 
?>

</center>
</div>

</body>

</html>
