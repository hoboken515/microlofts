<?php include '/home/frankencluster/public_html/group01/portal_block_resident.php';?>
<html>
<head>
<title>Resident Portal | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<h1 class="header">Resident Portal</h1>

<?php
	session_start();
    echo 'You are logged in as: '.$_SESSION['username'];
?>

<center>	

<h2>News Board</h2>
<?php
	include '/home/frankencluster/public_html/group01/cgi-bin/news_board_fetch.php';
?>
<br>

<!--<h2>Add to News Board</h2>
<form id="add" action="/cgi-bin/news_board_insert.php" method="post">
    <table>
    <tr><td><b> Topic: </b></td><td><input id="new_topic" name="new_topic" type="text"></tr>
    <tr><td><b> Comments: </b></td><td><input id="new_comment" name="new_comment" type="textarea"></td></tr>
    </table>

    <div style="margin-top:50px">
    <button id="btn-apply" type="submit" class="btn btn-success btn-lg" >Submit</button>
    </div>    
</form>     
-->
</center>

</body>

</html>
