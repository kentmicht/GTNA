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
        <link rel="stylesheet" type="text/css" href="../assets/css/homepage/student.css" media="all"/>
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
		      <a class="navbar-brand" href="#">
			      <p class='brandHeader1'>GT Northeast Academy</p>
			      <p class='brandHeader2'>Student's Information System</p>
		  	  </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		      	<li><a href="homepage.php"><i class="fas fa-home"></i> Home</a></li>
		        <li><a href="dashboard.php"><i class="fas fa-align-justify"></i> Dashboard</a></li>
		        <li class="active"><a href="student.php"><i class="fas fa-pencil-alt"></i> Student</a></li>
		        <li><a href="asessment.php"><i class="far fa-money-bill-alt"></i> Asessment</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
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
			<div class="row">
		        <div class='col-sm-9 col-md-10 main'>
		        	Student
		        </div>
	    	</div>
    	</div>
    	<div class="footer">
			<?php include 'footer.php'; ?>
		</div>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>