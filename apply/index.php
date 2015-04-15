<html>
<head>
  <title>Apply | Micro Loft</title>

  <script src="../js/jquery-2.1.3.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>

  <link rel="stylesheet" href="../styles/bootstrap.min.css">
  <link  type="text/css" rel="stylesheet" href="../styles/custom.css">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">Micro Loft</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
			include '/home/frankencluster/public_html/group01/home_navbar.php';
	   ?>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">
    <br>
    <center><h3><b>Apply Here!</b></h3></center>
    <hr>

    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel" >
                <div class="panel-heading">
                    <div class="panel-title">Application</div>
                    <!--<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="apply-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form name="apply_form" action="apply.php" method="post" class="form-horizontal" role="form">     

                        <div class="control-group">
                            <label class="control-label" for="firstname">First Name</label>
                            <div class="controls">
                              <input type="text" id="firstname" name="firstname" placeholder="" class="input-xlarge">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="lastname">Last Name</label>
                            <div class="controls">
                              <input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                      
                            <div style="margin-top:50px" class="form-group">
                                <!-- Button -->
          
                                <div class="col-md-12 controls">
                                  <center><button id="btn-apply" type="submit" class="btn btn-success btn-lg" >Apply  </button></center>
                                  

                                </div>
                            </div>    
                        </form>     



                    </div>                     
                </div>  

</div>

<div>
<center>	
<form class="form-horizontal" name="apply_form">

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fname">First Name</label>
  <div class="controls">
    <input id="fname" name="fname" type="text" placeholder="" class="apply_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="lname">Last Name</label>
  <div class="controls">
    <input id="lname" name="lname" type="text" placeholder="" class="apply_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="phone">Phone Number</label>
  <div class="controls">
    <input id="phone" name="phone" type="text" placeholder="" class="apply_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="apply_input">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="gender">Gender</label>
  <div class="controls">
    <label class="radio inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
      Male
    </label>
    <label class="radio inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="Female">
      Female
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="birth">Date of Birth</label>
  <div class="controls">
    <input id="birth" name="birth" type="text" placeholder="" class="apply_input" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="movein">Move in date</label>
  <div class="controls">
    <input id="movein" name="movein" type="text" placeholder="" class="apply_input" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="type">Apartment Type</label>
  <div class="controls">
    <select id="type" name="type" class="apply_input">
      <option>One bedroom, One bathroom</option>
      <option>Two bedroom, One bathroom</option>
      <option>Two bedroom, Two bathroom</option>
      <option>Three bedroom, Two bathroom</option>
      <option>Three bedroom, Three bathroom</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="applybutton1"></label>
  <div class="controls">
    <button id="applybutton1" name="applybutton1" class="apply_button">Submit</button>
    <button id="applybutton2" name="applybutton2" class="apply_button">Cancel</button>
  </div>
</div>

</form>
</center>
</div>


</body>

</html>
