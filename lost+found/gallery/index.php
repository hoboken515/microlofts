<html>
<head>
<title>Gallery | Micro Loft</title>
	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>

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
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Photo Gallery
            </h1>
        </div>
        <div class="col-md-12">
          <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> </h4>
                </div>
            <p> </p>
            <div id="gallery"><iframe src="http://group01.cs4370.com/images/test/MicroLofts/index.html" width="100%" height="100%" frameborder="0" name="galleryiframe"></iframe></div>
          </div>
</div>

</body>

</html>
