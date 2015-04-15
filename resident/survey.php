<html>
<head>
<title>Survey | Micro Loft</title>
<link  type="text/css" rel="stylesheet" href="/styles/microstyle.css">
</head>

<body>

<?php
	include '/home/frankencluster/public_html/group01/portal_navbar.php';
?>

<div>
	<h1 class="header">Resident Survey</h1>
	
<center>
	<form class="form-horizontal" name="survey_form">

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" class="survey_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="number">Phone Number</label>
  <div class="controls">
    <input id="number" name="number" type="text" placeholder="" class="survey_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="survey_input">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="unit">Unit</label>
  <div class="controls">
    <input id="unit" name="unit" type="text" placeholder="" class="survey_input">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="question1">How satisfied are you with Micro Loft?</label>
  <div class="controls">
    <label class="radio inline" for="question1-0">
      <input type="radio" name="question1" id="question1-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="question1-1">
      <input type="radio" name="question1" id="question1-1" value="2">
      2
    </label>
    <label class="radio inline" for="question1-2">
      <input type="radio" name="question1" id="question1-2" value="3">
      3
    </label>
    <label class="radio inline" for="question1-3">
      <input type="radio" name="question1" id="question1-3" value="4">
      4
    </label>
    <label class="radio inline" for="question1-4">
      <input type="radio" name="question1" id="question1-4" value="5">
      5
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="question2">How satisfied are you with the Micro Loft staff?</label>
  <div class="controls">
    <label class="radio inline" for="question2-0">
      <input type="radio" name="question2" id="question2-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="question2-1">
      <input type="radio" name="question2" id="question2-1" value="2">
      2
    </label>
    <label class="radio inline" for="question2-2">
      <input type="radio" name="question2" id="question2-2" value="3">
      3
    </label>
    <label class="radio inline" for="question2-3">
      <input type="radio" name="question2" id="question2-3" value="4">
      4
    </label>
    <label class="radio inline" for="question2-4">
      <input type="radio" name="question2" id="question2-4" value="5">
      5
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="question3">How satisfied are you with the turn around time for maintenance requests?</label>
  <div class="controls">
    <label class="radio inline" for="question3-0">
      <input type="radio" name="question3" id="question3-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="question3-1">
      <input type="radio" name="question3" id="question3-1" value="2">
      2
    </label>
    <label class="radio inline" for="question3-2">
      <input type="radio" name="question3" id="question3-2" value="3">
      3
    </label>
    <label class="radio inline" for="question3-3">
      <input type="radio" name="question3" id="question3-3" value="4">
      4
    </label>
    <label class="radio inline" for="question3-4">
      <input type="radio" name="question3" id="question3-4" value="5">
      5
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="question5">How satisfied are you with the community amenities provided by Micro Loft?</label>
  <div class="controls">
    <label class="radio inline" for="question5-0">
      <input type="radio" name="question5" id="question5-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="question5-1">
      <input type="radio" name="question5" id="question5-1" value="2">
      2
    </label>
    <label class="radio inline" for="question5-2">
      <input type="radio" name="question5" id="question5-2" value="3">
      3
    </label>
    <label class="radio inline" for="question5-3">
      <input type="radio" name="question5" id="question5-3" value="4">
      4
    </label>
    <label class="radio inline" for="question5-4">
      <input type="radio" name="question5" id="question5-4" value="5">
      5
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="question5">How satisfied are you with the cleanliness of the community areas?</label>
  <div class="controls">
    <label class="radio inline" for="question5-0">
      <input type="radio" name="question5" id="question5-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="question5-1">
      <input type="radio" name="question5" id="question5-1" value="2">
      2
    </label>
    <label class="radio inline" for="question5-2">
      <input type="radio" name="question5" id="question5-2" value="3">
      3
    </label>
    <label class="radio inline" for="question5-3">
      <input type="radio" name="question5" id="question5-3" value="4">
      4
    </label>
    <label class="radio inline" for="question5-4">
      <input type="radio" name="question5" id="question5-4" value="5">
      5
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="comments">Comments</label>
  <div class="controls">
    <input id="comments" name="comments" type="text" placeholder="" class="survey_input">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="requestbutton1"></label>
  <div class="controls">
    <button id="surveybutton1" name="requestbutton1" class="survey_button">Submit Survey</button>
    <button id="surveybutton2" name="requestbutton2" class="survey_button">Cancel</button>
  </div>
</div>

</form>
</center>
</div>

</body>

</html>