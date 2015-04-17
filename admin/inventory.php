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

<h2>Open & Close Units</h2>
<form name="em_account_form" action="add_unit.php" method="post">	
	<table class="hoverTable">
		<tr>
			<th class="emmaintenance_form_cell">Unit</th>
			<th class="emmaintenance_form_cell">Type</th>
			<th class="emmaintenance_form_cell">Price</th>
			<th class="emmaintenance_form_cell">Comments</th>
			<th class="emmaintenance_form_cell">Status</th>
		</tr>
		<tr>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell"><form class="form-horizontal" name="status_form">

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="Status"></label>
  <div class="controls">
    <select id="Status" name="Status" class="status_input">
      <option>Open</option>
      <option>Close</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="applybutton1"></label>
  <div class="controls">
    <button id="statusbutton1" name="applybutton1" class="status_button">Submit</button>
    <button id="statusbutton2" name="applybutton2" class="status_button">Cancel</button>
  </div>
</div>
</form>
</td>
		</tr>
		<tr>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell"><form class="form-horizontal" name="status_form">

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="Status"></label>
  <div class="controls">
    <select id="Status" name="Status" class="status_input">
      <option>Open</option>
      <option>Close</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="applybutton1"></label>
  <div class="controls">
    <button id="statusbutton1" name="applybutton1" class="status_button">Submit</button>
    <button id="statusbutton2" name="applybutton2" class="status_button">Cancel</button>
  </div>
</div>
</form>
</td>
		</tr>
		<tr>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
			<td class="emmaintenance_form_cell">info</td>
<td class="emmaintenance_form_cell"><form class="form-horizontal" name="status_form">

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="Status"></label>
  <div class="controls">
    <select id="Status" name="Status" class="status_input">
      <option>Open</option>
      <option>Close</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="applybutton1"></label>
  <div class="controls">
    <button id="statusbutton1" name="applybutton1" class="status_button">Submit</button>
    <button id="statusbutton2" name="applybutton2" class="status_button">Cancel</button>
  </div>
</div>
</form>
</td>
		</tr>
	</table>
	</form>
</center>
</div>
</body>

</html>
