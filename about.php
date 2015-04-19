<html>
<head>
<title>About Us | Micro Loft</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById("map-canvas");
            var myLatLng = new google.maps.LatLng(33.784524, -84.381165);
            var mapOptions = {
                center: myLatLng,
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "The MicroLand!"
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link  type="text/css" rel="stylesheet" href="styles/custom.css">

    <style>
        #map-canvas {
            width: 80%;
            height: 40%;
        }
    </style>
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

<!--Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                About Micro Loft
            </h1>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> </h4>
                </div>
                <div class="panel-body">
                    <p> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Location </h4>
                </div>
                <div class="panel-body">
                    <p><b>Address:</b><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;4848 Juniper Street <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Atlanta, Ga 3030303<br>
                        <center><div id="map-canvas"></div></p></center>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Leasing Center </h4>
                </div>
                <div class="panel-body">
                    <p>Swing by our leasing center to check out all the great features our location has to offer and see what our dedicated staff can do to put you into the home of your dreams.<br>
                    <br>
                    <b>Hours:</b><br><table>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Monday </td><td> &nbsp;&nbsp;&nbsp; 9am - 5pm</td><td>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Tuesday </td><td> &nbsp;&nbsp;&nbsp; 9am - 5pm</td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Wednesday </td><td> &nbsp;&nbsp;&nbsp; 9am - 3pm</td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Thursday </td><td> &nbsp;&nbsp;&nbsp; 9am - 5pm</td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Friday </td><td> &nbsp;&nbsp;&nbsp; 9am - 6pm</td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Saturday </td><td> &nbsp;&nbsp;&nbsp; 12pm - 6pm</td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Sunday </td><td> &nbsp;&nbsp;&nbsp; 12pm - 6pm</td></tr></table><br>
                    <a href="/contact.php" style="text-decoration":"None";>Contact Us!</a> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
