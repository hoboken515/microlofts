<html>
<head>
	<title>Micro Loft - CS 4370</title>

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


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://skyhousesouth.com/wp-content/uploads/2013/08/slide-8.jpg');"></div>
                <div class="carousel-caption">
                    <h2>INTRODUCING A NEW STYLE OF LIVING </h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.chateautowers.com/uploads/image/slider/03_opportune_full.jpg');"></div>
                <div class="carousel-caption">
                    <h2>A LUXURIOUS RESIDENCE WITHIN A HOMELY ENVIREMOENT</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://skyhousesouth.com/wp-content/uploads/2013/08/slide-6.jpg');"></div>
                <div class="carousel-caption">
                    <h2>POOLSIDE VIEW OF ATLANTA</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!--Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Micro Loft
                </h1>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Why Micro Loft?</h4>
                    </div>
                    <div class="panel-body">
                        <p>Micro Loft's commitment to sustainability is driven by our mission to create healthy, happy living spaces for residents and to be a responsible steward of our environment. To ensure our practices are effective, Micro Loft has committed to designing and constructing new developments to meet the standards of the Leadership in Energy and Environmental Design (LEED) green building rating system or similar green building programs. Additionally, many properties utilize Energy Star recommendations and regionally available building certifications.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Tip of The Month</h4>
                    </div>
                    <div class="panel-body">
                        <p> <b>Things to Do in April:</b>
                        Celebrate Atlanta's local breweries at Hogs and Hops on April 11, 2015 at Masquerade Music Park. Enjoy beer from craft breweries, live music, and delicious food.
    					Take a run, then head out on a bar crawl at the Run Before You Crawl 5K and Pub Crawl, which takes place in and around the Grant Park neighborhood on April 11, 2015.
    					Head to SweetWater 420 Festival for a weekend of music, entertainment, beer, and an all around good time. The weekend-long event is jam-packed with live music on three stages, a comedy tent, local artist market, and a unique variety of craft beer samples. It hits Centennial Olympic Park April 17 through 19, 2015.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Short-Term Furnished Apartments</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>Providing a seamless solution to furnished apartment living at its finest.</b>
    					Whether traveling for business or just between homes, Micro Loft offers a seamless solution for your short-term housing needs for stays of 90 days or longer. We anticipate your expectations and are committed to provide you with an exceptional level of comfort, quality, service and ease.
    					Reserve an apartment, pick up your keys and move in. It’s that easy! Our furnished apartments are thoughtfully appointed to work the way you do, and we handle all the details. Your monthly fees include the following:
    					<ul>
      						<li>All living, dining and bedroom furnishings</li>
      						<li>Utilities (electric, water, gas and cable)</li>
      						<li>TV, DVD</li>
      						<li>Essential cookware and dishes</li>
      						<li>Bedding, Bath and Linens</li>
      						<li>Access to all community amenities and events</li>
      					</ul>
    					<b>Pricing varies by community, dependent upon availability, apartment size and length of stay.</b></p>
                    </div>
                </div>
            </div>
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

