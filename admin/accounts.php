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
<form class="form-horizontal" name="accounts_form1" action="create_account.php" method="post">

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="type">Type of Account</label>
  <div class="controls">
	<label class="radio" for="type-0">
      <input type="radio" name="type" id="type-0" value="Admin" onclick="document.getElementById('company').disabled = true;  document.getElementById('depart').disabled = true; document.getElementById('unit').disabled = true;">
      Admin
    </label>
    <label class="radio" for="type-1">
      <input type="radio" name="type" id="type-1" value="Tenant" onclick="document.getElementById('unit').disabled = false; document.getElementById('company').disabled = true; document.getElementById('depart').disabled = true;">
      Resident
    </label>
    <label class="radio" for="type-2">
      <input type="radio" name="type" id="type-2" value="Employee" onclick="document.getElementById('company').disabled = false;  document.getElementById('depart').disabled = false; document.getElementById('unit').disabled = true;">
      Employee
    </label>
  </div>
</div>

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

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="unit">Unit Number</label>
  <div class="controls">
    <input id="unit" name="unit" type="text" placeholder="Only required for resident account" class="accounts_input" disabled="disabled">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="company">Company Name</label>
  <div class="controls">
    <input id="company" name="company" type="text" placeholder="Only required for employee account" class="accounts_input" disabled="disabled">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="depart">Department</label>
  <div class="controls">
    <input id="depart" name="depart" type="text" placeholder="Only required for employee account" class="accounts_input" disabled="disabled">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="accountbutton1"></label>
  <div class="controls">
    <button id="accountbutton1" name="accountbutton1" class="accounts_button">Create Account</button>
  </div>
</div>
</form>

<br>
<h2> Resident Accounts </h2>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/accounts_residents_fetch.php' ?>

<br>
<h2> Administrative Accounts </h2>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/accounts_admins_fetch.php' ?>

<br>
<h2> Employee Accounts </h2>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/accounts_employees_fetch.php' ?>

</center>

</div>

</body>

</html>
