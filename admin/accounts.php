<?php include '/home/frankencluster/public_html/group01/portal_block_admin.php';?>
<html>
<head>
<title>Tenant Accounts | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">Manage Tenant Accounts</h1>
<center>	
<h2>Create an Account</h2>
<form class="form-horizontal" name="accounts_form1">

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fname">First Name</label>
  <div class="controls">
    <input id="fname" name="fname" type="text" placeholder="" class="accounts_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="lname">Last Name</label>
  <div class="controls">
    <input id="lname" name="lname" type="text" placeholder="" class="accounts_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="phone">Phone Number</label>
  <div class="controls">
    <input id="phone" name="phone" type="text" placeholder="" class="accounts_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="accounts_input">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="type">Type of Account</label>
  <div class="controls">
    <label class="radio" for="type-0">
      <input type="radio" name="type" id="type-0" value="Tenant" checked="checked">
      Tenant
    </label>
    <label class="radio" for="type-1">
      <input type="radio" name="type" id="type-1" value="Employee">
      Employee
    </label>
    <label class="radio" for="type-2">
      <input type="radio" name="type" id="type-2" value="Admin">
      Admin
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="unit">Unit Number</label>
  <div class="controls">
    <input id="unit" name="unit" type="text" placeholder="" class="accounts_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="company">Company Name</label>
  <div class="controls">
    <input id="company" name="company" type="text" placeholder="" class="accounts_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="depart">Department</label>
  <div class="controls">
    <input id="depart" name="depart" type="text" placeholder="" class="accounts_input">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="accountbutton1"></label>
  <div class="controls">
    <button id="accountbutton1" name="accountbutton1" class="accounts_button">Create Account</button>
    <button id="accountbutton2" name="accountbutton2" class="accounts_button">Cancel</button>
  </div>
</div>
</form>

<p><h2>Open & Close an Account</h2>

<form name="em_account_form" action="">	
	<table class="hoverTable">
		<tr>
			<th class="emmaintenance_form_cell">First Name</th>
			<th class="emmaintenance_form_cell">Last Name</th>
			<th class="emmaintenance_form_cell">Unit</th>
			<th class="emmaintenance_form_cell">User ID</th>
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
