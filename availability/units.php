<html>
<head>
	<title>Units | Micro Loft</title>

	<script src="../js/jquery-2.1.3.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>

	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link  type="text/css" rel="stylesheet" href="../styles/custom.css">
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
        <h3><b>Micro Loft - Apartment Unit Description and Pricing</b></h3>
        <hr>
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Units</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Apt#" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Unit Style" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Current Price" disabled></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1 Bedroom</td>
                            <td>$840/mo.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2 Bedrooms</td>
                            <td>$975/mo.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>3 Bedrooms</td>
                            <td>$1,115/mo.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <div class="unitmaps">
            <div class="col-md-4">
                <p>Three Bedroom and Two Baths</p>
                <img alt="Three Bedroom and Two Baths" border="" src="../images/3bedroom.jpg" vspace="0" hspace="0" width="300">
            </div>
             <div class="col-md-4">
                <p>Two Bedroom and One Bath</p>
                <img alt="Three Bedroom and Two Baths" border="" src="../images/2bedroom.jpg" vspace="0" hspace="0" width="300">
            </div>
             <div class="col-md-4">
                <p>One Bedroom and One Bath</p>
                <img alt="Three Bedroom and Two Baths" border="" src="../images/1bedroom.jpg" vspace="0" hspace="0" width="300">
            </div>
        </div>

    </div>

    <div class="push"></div>
</div>

<div class="footer">
        <div class="navbar navbar-default nav-space">
            <div class="container">
                  <p class="navbar-text">Copyright &copy; Micro Loft 2015</p>
        </div>
    </div>

</body>

</html>