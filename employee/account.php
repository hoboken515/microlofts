<?php include '/home/frankencluster/public_html/group01/portal_block_employee.php';?>
<html>
<head>
<title>Employee Account | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
    include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
<h1 class="header">Employee Account</h1>

<center>

<?php
    include '/home/frankencluster/public_html/group01/cgi-bin/accounts_employees_fetch.php' 
?>

</center>
</div>

</body>

</html>
