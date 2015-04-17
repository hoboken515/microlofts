<?php include '/home/frankencluster/public_html/group01/portal_block_admin.php';?>
<html>
<head>
<title>Admin Portal | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php	include '/home/frankencluster/public_html/group01/portal_navbar.php';?>

<h1 class="header">Admin Portal</h1>
<center>

<h2> News Board </h2>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/news_board_fetch.php';?>
<br>

<h2>Add to News Board</h2>
<form id="add" action="/cgi-bin/news_board_insert.php" method="post">
    <table>
    <tr><td><b> Topic: </b></td><td><input id="new_topic" name="new_topic" type="text"></tr>
    <tr><td><b> Comments: </b></td><td><input id="new_comment" name="new_comment" type="textarea"></td></tr>
    </table>

    <div style="margin-top:50px">
    <button id="btn-apply" type="submit" class="btn btn-success btn-lg" >Submit</button>
    </div>    
</form>     
</center>
<!-- Possibly Depricated? Needs Design Review. -->

<!-- Text input
<div class="control-group">
  <label class="control-label" for="title">Title</label>
  <div class="controls">
    <input id="title" name="title" type="text" placeholder="" class="admin_input" required="">
    
  </div>
</div>-->

<!-- Select Basic 
<div class="control-group">
  <label class="control-label" for="type">Post Type</label>
  <div class="controls">
    <select id="type" name="type" class="admin_input">
      <option>Admin News</option>
      <option>Employee News</option>
      <option>Resident News</option>
    </select>
  </div>
</div>-->

<!-- Text input
<div class="control-group">
  <label class="control-label" for="comments">Comments</label>
  <div class="controls">
    <input id="comments" name="comments" type="text" placeholder="" class="admin_input" required="">
    
  </div>
</div>-->

<!-- Button (Double) 
<div class="control-group">
  <label class="control-label" for="applybutton1"></label>
  <div class="controls">
    <button id="adminbutton1" name="adminbutton1" class="admin_button">Submit</button>
    <button id="adminbutton2" name="adminbutton2" class="admin_button">Cancel</button>
  </div>
</div>
-->

</body>
</html>
