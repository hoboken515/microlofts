<?php include '/home/frankencluster/public_html/group01/portal_block_admin.php';?>
<html>
<head>
<title>Admin Portal | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php   include '/home/frankencluster/public_html/group01/portal_navbar.php';?>

<h1 class="header">Admin Portal</h1>
<center>

<h2> News Board </h2>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/news_board_fetch.php';?>
<br>

<h2>Add to News Board</h2>
<form id="add" action="/cgi-bin/news_board_insert.php" method="post">
    <!-- Topic Name -->
    <div class="control-group">
    <label class="control-label" for="fname">Topic</label>
        <div class="controls">
        <input id="new_topic" name="new_topic" type="text" class="admin_input" required="">
        </div>
    </div>

    <!-- Comment -->
    <div class="control-group">
    <label class="control-label" for="fname">Comments</label>
        <div class="controls">
        <input id="new_comment" name="new_comment" type="textarea" class="admin_input" required="">
        </div>
    </div>

    <!-- Submit -->
    <div style="margin-top:50px">
    <button  type="submit" class="admin_button" id="adminbutton1" >Submit</button>
    </div>    
</form>     
</center>

</body>
</html>
