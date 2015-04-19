<?php include '/home/frankencluster/public_html/group01/portal_block_resident.php';?>
<html>
<head>
<title>Maintenance Request | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">Maintenance Requests</h1>
	
	<center>
    <h2> Create a Maintenance Request </h2>
	<form class="form-horizontal" name="maint_form" action="resident_request.php" method="post">

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" class="request_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="number">Phone Number</label>
  <div class="controls">
    <input id="number" name="number" type="text" placeholder="" class="request_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="request_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="unit">Unit</label>
  <div class="controls">
    <input id="unit" name="unit" type="text" placeholder="" class="request_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="area">Area in Unit</label>
  <div class="controls">
    <input id="area" name="area" type="text" placeholder="*Example: Kitchen, Living Room, etc." class="request_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="description">Description</label>
  <div class="controls">
    <input id="description" name="description" type="text" placeholder="Reason for Maintenance" class="request_input" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="requestbutton1"></label>
  <div class="controls">
    <button id="requestbutton1" name="requestbutton1" class="request_button">Submit Request</button>
    <button id="requestbutton2" name="requestbutton2" class="request_button">Cancel</button>
  </div>
</div>

</form>

<br>
<h2> Your Maintenance Requests </h2>
<?php include '/home/frankencluster/public_html/group01/cgi-bin/maintenance_requests_fetch.php' ?>
</center>
</div>
</body>

</html>
