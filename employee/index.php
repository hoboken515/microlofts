<?php include '/home/frankencluster/public_html/group01/portal_block_employee.php';?>
<html>
<head>
<title>Employee Portal | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
    include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<h1 class="header">Employee Portal</h1>
<center>    
<br>

<h2> News Board </h2>
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
