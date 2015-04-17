<?php include '/home/frankencluster/public_html/group01/portal_block_employee.php';?>
<html>
<head>
<title>View Maintenance Requests | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">View Maintenance Requests</h1>
	
<center>


<form name="em_account_form" action="">	
	<table class="hoverTable">
		<tr>
			<th class="emmaintenance_form_cell">Request ID</th>
			<th class="emmaintenance_form_cell">Unit Number</th>
			<th class="emmaintenance_form_cell">Date Created</th>
			<th class="emmaintenance_form_cell">Department</th>
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
</form>
</center>
</div>

</body>

</html>
