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
    <div class="col-lg-12">
        <h1 class="page-header">Apply Here!</h1>
    </div>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel" >
            <div class="panel-heading"><div class="panel-title">Application</div></div>     
                    <!--<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->

            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="apply-alert" class="alert alert-danger col-sm-12"></div>
                <form name="apply_form" action="application_email.php" method="post" class="form-horizontal" role="form">     
                    <div class="control-group">
                        <label class="control-label" for="firstname">First Name</label>
                        <div class="controls"><input type="text" id="fname" name="fname" placeholder="" class="apply_input"></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="lastname">Last Name</label>
                        <div class="controls"><input type="text" id="lname" name="lname" placeholder="" class="apply_input"></div>
                    </div>
                      
                    <div class="control-group">
                        <label class="control-label" for="phone">Phone Number</label>
                        <div class="controls"><input id="phone" name="phone" type="text" placeholder="" class="apply_input" required=""></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls"><input id="email" name="email" type="text" placeholder="" class="apply_input"></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="birth">Date of Birth</label>
                        <div class="controls"><input id="birth" name="birth" type="text" placeholder="" class="apply_input" required=""></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="movein">Move in date</label>
                        <div class="controls"><input id="movein" name="movein" type="text" placeholder="" class="apply_input" required=""></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="type">Apartment Type</label>
                        <div class="controls"><select id="type" name="type" class="apply_input">
                            <option>One bedroom, One bathroom</option>
                            <option>Two bedroom, One bathroom</option>
                            <option>Two bedroom, Two bathroom</option>
                            <option>Three bedroom, Two bathroom</option>
                            <option>Three bedroom, Three bathroom</option>
                        </select></div>
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
</div>

</body>
</html>
