
<html>
<head>
<title>Admin Portal | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php	include '/home/frankencluster/public_html/group01/portal_navbar.php';?>

<div>
	<h1 class="header">Admin Portal</h1>
	<center>
<h2>Create a New Topic</h2>
<form class="admin_form">

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="title">Title</label>
  <div class="controls">
    <input id="title" name="title" type="text" placeholder="" class="admin_input" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="type">Post Type</label>
  <div class="controls">
    <select id="type" name="type" class="admin_input">
      <option>Admin News</option>
      <option>Employee News</option>
      <option>Resident News</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="comments">Comments</label>
  <div class="controls">
    <input id="comments" name="comments" type="text" placeholder="" class="admin_input" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="applybutton1"></label>
  <div class="controls">
    <button id="adminbutton1" name="adminbutton1" class="admin_button">Submit</button>
    <button id="adminbutton2" name="adminbutton2" class="admin_button">Cancel</button>
  </div>
</div>

</form>

<h2>News Board</h2>
<form name="admin_news_table" action="" id="admin_form">	
	<table class="hoverTable">
		<tr>
			<th class="admin_form_cell">Date</th>
			<th class="admin_form_cell">Topic Name</th>
			<th class="admin_form_cell">Comments</th>
		</tr>
		<tr>
			<td class="admin_form_cell">info</td>
			<td class="admin_form_cell">info</td>
			<td class="admin_form_cell">info</td>
		</tr>
		<tr>
			<td class="admin_form_cell">info</td>
			<td class="admin_form_cell">info</td>
			<td class="admin_form_cell">info</td>
		</tr>
		<tr>
			<td class="admin_form_cell">info</td>
			<td class="admin_form_cell">info</td>
			<td class="admin_form_cell">info</td>
		</tr>
	</table>
</form>
</center>
</div>

</body>

</html>
