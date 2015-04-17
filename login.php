<html>
<head>
	<title>>Login | Micro Loft</title>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link  type="text/css" rel="stylesheet" href="styles/custom.css">
</head>

<body>

<div class="wrapper">

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
                <a class="navbar-brand" href="index.php">Micro Loft</a>
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
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel" >
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                        <!--<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form name="loginform" action="user_login.php" method="post" class="form-horizontal" role="form">     
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
    					
                                    <div class="col-md-12 controls">
                                      <center><button id="btn-login" type="submit" class="btn btn-success btn-lg" >Login  </button></center>
                                      

                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  

    		<!--
            <center>
            <br>      
    		Temporary Links to Portals:
    		<br>
    		<li><a href="/admin/"> Administrative Portal </a></li>
    		<br>
    		<li><a href="/employee/"> Employee Portal </a></li>
    		<br>
    		<li><a href="/resident/"> Resident Portal </a></li>
    		<br>
    		</center>
    		-->

        </div> 

    </div>
    <div class="push"></div>
</div>

    <div class="footer">
        <div class="navbar navbar-default">
            <div class="container">
                  <p class="navbar-text">Copyright &copy; Micro Loft 2015</p>
        </div>
    </div>
</body>

</html>
