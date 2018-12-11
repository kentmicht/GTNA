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
        <link rel="icon" href="../../assets/images/GTNALogo.png">
        <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../../assets/css/homepage/overall.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../../assets/css/homepage/dashboard.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../../assets/css/homepage/calendar-dashboard.css" media="all"/>
		<!-- <script type="text/javascript" src="assets/js/modernizr.custom.86080.js"></script> -->
        <link rel="stylesheet" type="text/css" href="../../assets/fontawesome/css/all.min.css">

    </head>
    <body>
    	<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid navbar-gtna">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="../homepage.php">
			      <p class='brandHeader1'>GT Northeast Academy</p>
			      <p class='brandHeader2'>Student's Information System</p>
		  	  </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		      	<li><a href="../homepage.php"><i class="fas fa-home"></i> Home</a></li>
		        <li class="active"><a href="../dashboard.php"><i class="fas fa-pencil-alt"></i> Student</a></li>
		        <li><a href="../teacher.php"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
		      </ul>
		      <?php include '../logoutProfile.php' ?>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class='container-fluid'>
			<!-- Dashboard -->
			<div class="row">
		        <div class="col-sm-3 col-md-2 sidebar">
		          <ul class="nav nav-sidebar">
		          	<li><a href="../dashboard.php"><i class="far fa-eye dashboardIcons"></i>Overview</span></a></li>
		          	<li><a href="students-dashboard.php"><i class="fas fa-book-open dashboardIcons"></i>Students</span></a></li>
		            <li><a href="asessment-dashboard.php"><i class="fas fa-money-bill-alt dashboardIcons"></i>Student Asessment</span></a></li>
		            <li><a href="schedule-dashboard.php"><i class="fas fa-clock dashboardIcons"></i>Student Schedule</a></li>
		            <li class="active"><a href="academicCalendar-dashboard.php"><i class="far fa-calendar-alt dashboardIcons"></i>Academic Calendar</a></li>
		          </ul>
		        </div>
		        <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 mainDashboard'>
		        	<div class='text-center '>
		        		<iframe class='calendarGT' src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ule8i3jv0i01lln6deblhufd14%40group.calendar.google.com&amp;color=%23711616&amp;src=en.philippines%23holiday%40group.v.calendar.google.com&amp;color=%23875509&amp;ctz=Asia%2FManila" style="border-width:0" width="1550" height="600" frameborder="0" scrolling="no"></iframe>
		        	</div>
		        	<div class="footer">
						<div class='container-fluid'>
							<?php include '../footer.php'; ?>
						</div>
					</div>
		        </div>
	    	</div>
    	</div>

    	<?php include '../accountProfile.php'; ?>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>