<?php include '/home/frankencluster/public_html/group01/portal_block_resident.php';?>
<html>
<head>
<title>Pay Rent | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">Pay Rent</h1>
</div>
<center>
<form class="form-horizontal" name="pay_form">

<div class="control-group">
  <label class="control-label" for="amount">Payment Amount</label>
  <div class="controls">
    <input id="amount" name="amount" type="text" placeholder="0.00" class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="name">Cardholder's Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="number">Card Number</label>
  <div class="controls">
    <input id="number" name="number" type="text" placeholder="" class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="date">Date</label>
  <div class="controls">
    <input id="date" name="date" type="text" placeholder="Expiration Date " class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="cvv">CVV</label>
  <div class="controls">
    <input id="cvv" name="cvv" type="text" placeholder="" class="pay_input" required="">
    <p class="help-block">*The three digits on the back of the card</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="address">Address Line 1</label>
  <div class="controls">
    <input id="address" name="address" type="text" placeholder="" class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="address2">Address Line 2</label>
  <div class="controls">
    <input id="address2" name="address2" type="text" placeholder="" class="pay_input">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="city">City</label>
  <div class="controls">
    <input id="city" name="city" type="text" placeholder="" class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="state">State</label>
  <div class="controls">
    <select id="state" name="state" class="pay_input">
      <option>Alabama</option>
      <option>Alaska</option>
      <option>Arizona</option>
      <option>Arkansas</option>
      <option>California</option>
      <option>Colorado</option>
      <option>Connecticut</option>
      <option>Delaware</option>
      <option>Florida</option>
      <option>Georgia</option>
      <option>Hawaii</option>
      <option>Idaho</option>
      <option>Illinois</option>
      <option>Indiana</option>
      <option>Iowa</option>
      <option>Kansas</option>
      <option>Kentucky</option>
      <option>Louisiana</option>
      <option>Maine</option>
      <option>Maryland</option>
      <option>Massachusetts</option>
      <option>Michigan</option>
      <option>Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option>Utah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option>Washington</option>
      <option>West Virginia</option>
      <option>Wisconsin</option>
      <option>Wyoming</option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="zip">Zip</label>
  <div class="controls">
    <input id="zip" name="zip" type="text" placeholder="" class="pay_input" required="">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="button1" name="button1id" class="pay_button">Submit</button>
    <button id="button2" name="button2id" class="pay_button">Cancel</button>
  </div>
</div>


</form>

</center>


</body>

</html>
