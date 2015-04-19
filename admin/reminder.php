<?php include '/home/frankencluster/public_html/group01/portal_access_block.php';?>
<html>
<head>
<title>Send Rent Reminder | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">Reminders</h1>
	
<center>
<h2>Send a Rent Reminder</h2>
<form class="form-horizontal" name="reminder_form" action="reminder_email.php" method="post">

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fname">First Name</label>
  <div class="controls">
    <input id="fname" name="fname" type="text" placeholder="" class="reminder_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="lname">Last Name</label>
  <div class="controls">
    <input id="lname" name="lname" type="text" placeholder="" class="reminder_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="reminder_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="unit">Unit Number</label>
  <div class="controls">
    <input id="unit" name="unit" type="text" placeholder="" class="reminder_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="amount">Amount Due</label>
  <div class="controls">
    <input id="amount" name="amount" type="text" placeholder="0.00" class="reminder_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="date">Due Date</label>
  <div class="controls">
    <input id="date" name="date" type="text" placeholder="" class="reminder_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="comments">Comments</label>
  <div class="controls">
    <input id="comments" name="comments" type="text" placeholder="" class="reminder_input">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="reminderbutton1"></label>
  <div class="controls">
    <button id="reminderbutton1" name="reminderbutton1" class="reminder_button">Send</button>
    <button id="reminderbutton2" name="reminderbutton2" class="reminder_button">Cancel</button>
  </div>
</div>

</form>
</center>
</div>

</body>

</html>
