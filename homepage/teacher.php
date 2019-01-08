<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8"/>
        <title>GSIS</title><!-- 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" /> -->
        <!-- <link rel="shortcut icon" href="../favicon.ico">  -->
        <link rel="icon" href="../assets/images/GTNALogo.png">
        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/homepage/overall.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/homepage/asessment.css" media="all"/>
		<!-- <script type="text/javascript" src="assets/js/modernizr.custom.86080.js"></script> -->
        <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">

    </head>
    <body>
    	<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="homepage.php">
			      <p class='brandHeader1'>GT Northeast Academy</p>
			      <p class='brandHeader2'>Student's Information System</p>
		  	  </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		      	<li><a href="homepage.php"><i class="fas fa-home"></i> Home</a></li>
		        <li><a href="dashboard.php"><i class="fas fa-pencil-alt"></i> Student</a></li>
		        <li class="active"><a href="teacher.php"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user logoutMainIcon"></i> ID Number <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><i class="fas fa-id-card-alt logoutIcons"></i> Profile</a></li>
		            <li><a href="#"><i class="fas fa-key logoutIcons"></i> Manage Password</a></li>
		            <li><a href="../index.php"><i class="fas fa-sign-out-alt logoutIcons"></i> Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
    	<div class='container-fluid'>
			<!-- Dashboard -->
			<div class="row containerContent">
		        <div class='asessment'>
		        	<!-- Jumbotron -->
				      <div class="asessmentContent">
				        <!-- <h1>Welcome Back <span class='idNumber' style='color:#700000'>15100375</span>!</h1>
				        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
				        <p><a class="btn btn-lg btn-default getStartedBtn" href="dashboard.php" role="button">Get started today</a></p> -->
				      </div>

				      <div class="asessmentContent">
				        <!-- <h1>Welcome Back <span class='idNumber' style='color:#700000'>15100375</span>!</h1>
				        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
				        <p><a class="btn btn-lg btn-default getStartedBtn" href="dashboard.php" role="button">Get started today</a></p> -->
				      </div>
		        </div>
	    	</div>
    	</div>
    	<div class="footer">
			<div class='container-fluid'>
				<?php include 'footer.php'; ?>
			</div>
		</div>
    	<?php include 'accountProfile.php'; ?>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>