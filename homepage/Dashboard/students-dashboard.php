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
        <link rel="stylesheet" type="text/css" href="../../assets/css/dashboard/student-dashboard.css" media="all"/>
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
		      <a class="navbar-brand" href="homepage.php">
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
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user logoutMainIcon"></i> ID Number <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><i class="fas fa-id-card-alt logoutIcons"></i> Profile</a></li>
		            <li><a href="#"><i class="fas fa-key logoutIcons"></i> Manage Password</a></li>
		            <li><a href="../../index.php"><i class="fas fa-sign-out-alt logoutIcons"></i> Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class='container-fluid'>
			<!-- Dashboard -->
			<div class="row">
		        <div class="col-sm-3 col-md-2 sidebar">
		          <ul class="nav nav-sidebar">
		          	<li><a href="../dashboard.php"><i class="far fa-eye dashboardIcons"></i>Overview</span></a></li>
		          	<li class="active"><a href="students-dashboard.php"><i class="fas fa-book-open dashboardIcons"></i>Students</span></a></li>
		            <li><a href="asessment-dashboard.php"><i class="fas fa-money-bill-alt dashboardIcons"></i>Student Asessment</span></a></li>
		            <li><a href="schedule-dashboard.php"><i class="fas fa-clock dashboardIcons"></i>Student Schedule</a></li>
		            <li><a href="academicCalendar-dashboard.php"><i class="far fa-calendar-alt dashboardIcons"></i>Academic Calendar</a></li>
		          </ul>
		        </div>
		        <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 mainDashboard'>
		        	<div class='studentCorner'>
			        	<!-- <div class="container studentCorner"> -->
						  <h1 class='studentHeader'>Student List
						  	<?php
						  		if(isset($_POST['idNumEdit'])){
						  			echo $_POST['idNumEdit'];
						  		}
						  	?>
						  	<button type="button" class="btn btn-default addStudent" data-toggle="modal" data-target="#studentAddModal">
						  		<i class="fas fa-plus"></i>
						  		Add Student
						  	</button>
						  </h1>
						  <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
						  <form action="students-dashboard.php">
						  	<div class="input-group">
						  		<span class="input-group-addon">
						  			<select id="sel1">
									    <option>ID Number</option>
									    <option>Firstname</option>
									    <option>Lastname</option>
									    <option>Year Level</option>
									</select>
						  		</span>
	    						<input type="text" class="form-control" placeholder="Search">
	    						<div class="input-group-btn">
	      							<button class="btn btn-default" type="submit">
	      								<i class="fas fa-search"></i>
	      							</button>
	      						</div>
	      					</div>
	      				  </form>
						<!-- </div> -->

						<!-- <div class="container studentCorner"> -->
						  <!-- <h2>Hover Rows</h2> -->
						  <p></p>            
						  <table class="table table-hover tableStudentCorner">
						    <thead class='studentThead'>
						      <tr>
						      	<th>ID Number</th>
						        <th>Firstname</th>
						        <th>Lastname</th>
						        <th>Year Level</th>
						        <th class='text-center'>Options</th>
						      </tr>
						    </thead>
						    <tbody class='studentTbody'>
						      <tr>
						      	<td>15100375</td>
						        <td>John</td>
						        <td>Doe</td>
						        <td>Grade 1</td>
						        <td class='text-center'>
						        	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#studentInfoModal"><i class="fas fa-user-alt btnStudent"></i></button>
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#studentEditModal"><i class="fas fa-user-edit btnStudent"></i></button>
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#studentDeleteModal"><i class="fas fa-user-times btnStudent"></i></button>
						        </td>
						      </tr>
						      <tr>
						      	<td>15100376</td>
						        <td>Mary</td>
						        <td>Moe</td>
						        <td>Grade 2</td>
						        <td class='text-center'>
						        	<button type="button" class="btn btn-default"><i class="fas fa-user-alt btnStudent"></i></button>
									<button type="button" class="btn btn-default"><i class="fas fa-user-edit btnStudent"></i></button>
									<button type="button" class="btn btn-default"><i class="fas fa-user-times btnStudent"></i></button>
						        </td>
						      </tr>
						      <tr>
						      	<td>15100377</td>
						        <td>July</td>
						        <td>Dooley</td>
						        <td>Grade 3</td>
						        <td class='text-center'>
						        	<button type="button" class="btn btn-default"><i class="fas fa-user-alt btnStudent"></i></button>
									<button type="button" class="btn btn-default"><i class="fas fa-user-edit btnStudent"></i></button>
									<button type="button" class="btn btn-default"><i class="fas fa-user-times btnStudent"></i></button>
						        </td>
						      </tr>
						    </tbody>
						  </table>
						<!-- </div> -->
					</div>
		        	<div class="footer">
		        		<div class='container-fluid'>
							<?php include '../footer.php'; ?>
						</div>
					</div>
		        </div>
	    	</div>
    	</div>
    	<!-- Modal Student Information -->
		<div class="modal fade" id="studentInfoModal" role="dialog">
		    <div class="modal-dialog modal-lg">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title studentNameMain"><span class='studentName'><i class="fas fa-user"></i> Kent Michael's</span> Information</h4>
		        </div>
		        <div class="modal-body">
		        	<center><i class="fas fa-id-card imgIconStudent"></i></center>
			        <p class='personInfoHeader'><i class="fas fa-info-circle"></i> Personal Information</p>
			        <hr class='hrModal'>
			        <div class="row">
					  <div class="col-md-9 personInfoFirst">
					  	<p>
					  		<i class="col-md-1 fas fa-id-card-alt studentInfoIcon"></i>
					  		<span class='personInfoLabel'>ID Number:</span> 
					  		<span class='idNumber'>15100375</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-user studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Student Name:</span> 
					  		<span class='studName'>Kent Michael K. Talisaysay</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-level-up-alt studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Grade Level:</span> 
					  		<span class='gradeLevelSection'>Grade 5 - Sapphire</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-birthday-cake studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Birthday:</span> 
					  		<span class='birthDay'>September 15, 1998</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-map-marker-alt studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Address:</span> 
					  		<span class='studAddress'>493. Sta. Catalina Subdivision, Yati Liloan Cebu 6002</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-church studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Religion:</span> 
					  		<span class='studReligion'>Roman Catholic</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-male studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Nationality:</span> 
					  		<span class='studNationality'>Filipino</span>
					  	</p>
					  </div>
					</div>

					<p class='personInfoHeader'><i class="fas fa-phone"></i> Contact Information</p>
			        <hr class='hrModal'>
			        <div class="row">
					  <div class="col-md-9 personInfoFirst">
					  	<p>
					  		<i class="col-md-1 fas fa-phone-square studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Telephone Number:</span> 
					  		<span class='telNum'>(032) 520 - 3073</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-mobile-alt studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Mobile Number:</span> 
					  		<span class='mobNum'>+639664118929</span>
					  	</p>
					  </div>
					</div>

					<p class='personInfoHeader'><i class="fas fa-user-shield"></i> In Case of Emergency</p>
			        <hr class='hrModal'>
			        <div class="row">
					  <div class="col-md-9 personInfoFirst">
					  	<p>
					  		<i class="col-md-1 fas fa-user studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Guardian Name:</span> 
					  		<span class='guardianName'>Michael M. Talisaysay</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-map-marker-alt studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Address:</span> 
					  		<span class='guardianAddress'>493. Sta. Catalina Subdivision, Yati Liloan Cebu 6002</span>
					  	</p>
					  	<p>
					  		<i class="col-md-1 fas fa-mobile-alt studentInfoIcon"></i>
					  		<span class='personInfoLabel'>Contact Number:</span> 
					  		<span class='mobNum'>+639228221696</span>
					  	</p>
					  </div>
					</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default btnCloseModal" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		      
		    </div>
		</div>

		<!-- Modal Student Add Information -->
		<div class="modal fade" id="studentAddModal" role="dialog">
		    <div class="modal-dialog modal-lg">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title studentName">Add Student</h4>
		        </div>
		        <form method='POST' action='students-dashboard.php'>
			        <div class="modal-body">
			        	<center><i class="fas fa-id-card imgIconStudent"></i></center>
				        <p class='personInfoHeader'><i class="fas fa-info-circle"></i> Personal Information</p>
				        <hr class='hrModal'>
				        <div class="row personInfoDetails">
						  <div class="col-md-10 personInfoFirst ">
						  	<p>
						  		<i class="col-md-1 fas fa-id-card-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>ID Number:</span> 
						  		<span class='idNumberEdit'>
						  			<input type="text" placeholder='ID Number' class="form-control col-md-offset-1" id="idNumEdit" name='idNumEdit'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-user studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Student Name:</span> 
						  		<span class='studName'>
						  			<input type="text" placeholder='Student Name' class="form-control col-md-offset-1" id="studNameEdit" name='studNameEdit'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-level-up-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Grade Level:</span> 
						  		<span class='gradeLevelSection'>
						  			<input type="text" placeholder='Grade Level' class="form-control col-md-offset-1" id="studNameEdit" name='studNameEdit'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-birthday-cake studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Birthday:</span> 
						  		<span class='birthDay'>
						  			<input class="form-control col-md-offset-1" type="date" id="birthDayEdit" name='birthDayEdit'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-map-marker-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Address:</span> 
						  		<span class='studAddress'>
						  			<input type="text" placeholder='Address' class="form-control col-md-offset-1" id="addressEdit" name='addressEdit'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-church studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Religion:</span> 
						  		<span class='studReligion'>
						  			<input type="text" placeholder='Religion' class="form-control col-md-offset-1" id="studReligion" name='studReligion'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-male studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Nationality:</span> 
						  		<span class='studNationality'>
						  			<input type="text" placeholder='Nationality'' class="form-control col-md-offset-1" id="studNationality" name='studNationality'>
						  		</span>
						  	</p>
						  </div>
						</div>

						<p class='personInfoHeader'><i class="fas fa-phone"></i> Contact Information</p>
				        <hr class='hrModal'>
				        <div class="row personInfoDetails">
						  <div class="col-md-10 personInfoFirst">
						  	<p>
						  		<i class="col-md-1 fas fa-phone-square studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Telephone Number:</span> 
						  		<span class='telNum'>
						  			<input type="text" placeholder='Telephone Number' class="form-control col-md-offset-1" id="telNum" name='telNum'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-mobile-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Mobile Number:</span> 
						  		<span class='mobNum'>
						  			<input type="text" placeholder='Mobile Number' class="form-control col-md-offset-1" id="mobNum" name='mobNum'>
						  		</span>
						  	</p>
						  </div>
						</div>

						<p class='personInfoHeader'><i class="fas fa-user-shield"></i> In Case of Emergency</p>
				        <hr class='hrModal'>
				        <div class="row personInfoDetails">
						  <div class="col-md-10 personInfoFirst">
						  	<p>
						  		<i class="col-md-1 fas fa-user studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Guardian Name:</span> 
						  		<span class='guardianName'>
						  			<input type="text" placeholder='Guardian Name' class="form-control col-md-offset-1" id="guardName" name='guardName'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-map-marker-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Address:</span> 
						  		<span class='guardianAddress'>
						  			<input type="text" placeholder='Address' class="form-control col-md-offset-1" id="guardAddress" name='guardAddress'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-mobile-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Contact Number:</span> 
						  		<span class='mobNum'>
						  			<input type="text" placeholder='Telephone Number' class="form-control col-md-offset-1" id="guardNum" name='guardNum'>
						  		</span>
						  	</p>
						  </div>
						</div>
			        </div>
			        <div class="modal-footer">
			        	<button type="submit" class="btn btn-default btnModalStudent"><i class="fas fa-plus"></i> Add</button>
			          	<button type="button" class="btn btn-default btnCloseModal" data-dismiss="modal">Close</button>
			        </div>
		      	</form>
		      </div>
			</div>
		</div>

		<!-- Modal Student Edit Information -->
		<div class="modal fade" id="studentEditModal" role="dialog">
		    <div class="modal-dialog modal-lg">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title studentName">Edit Student's Information</h4>
		        </div>

		        <!-- Form Class for Edit Patient -->
		        <form method='POST' action='students-dashboard.php'>
			        <div class="modal-body">
			        	<center><i class="fas fa-id-card imgIconStudent"></i></center>
				        <p class='personInfoHeader'><i class="fas fa-info-circle"></i> Personal Information</p>
				        <hr class='hrModal'>
				        <div class="row personInfoDetails">
							  <div class="col-md-10 personInfoFirst ">
							  	<p>
							  		<i class="col-md-1 fas fa-id-card-alt studentInfoIcon"></i>
							  		<span class='personInfoLabel'>ID Number:</span> 
							  		<span class='idNumberEdit'>
							  			<input type="text" value='15100375' placeholder='ID Number' class="form-control col-md-offset-1" id="idNumEdit" name='idNumEdit'>
							  		</span>
							  	</p>
							  	<p>
							  		<i class="col-md-1 fas fa-user studentInfoIcon"></i>
							  		<span class='personInfoLabel'>Student Name:</span> 
							  		<span class='studName'>
							  			<input type="text" value='Kent Michael K. Talisaysay' placeholder='Student Name' class="form-control col-md-offset-1" id="studNameEdit" name='studNameEdit'>
							  		</span>
							  	</p>
							  	<p>
							  		<i class="col-md-1 fas fa-level-up-alt studentInfoIcon"></i>
							  		<span class='personInfoLabel'>Grade Level:</span> 
							  		<span class='gradeLevelSection'>
							  			<input type="text" value='Grade 5 - Sapphire' placeholder='Grade Level' class="form-control col-md-offset-1" id="studNameEdit" name='studNameEdit'>
							  		</span>
							  	</p>
							  	<p>
							  		<i class="col-md-1 fas fa-birthday-cake studentInfoIcon"></i>
							  		<span class='personInfoLabel'>Birthday:</span> 
							  		<span class='birthDay'>
							  			<input class="form-control col-md-offset-1" type="date" value="1998-09-15" id="birthDayEdit" name='birthDayEdit'>
							  		</span>
							  	</p>
							  	<p>
							  		<i class="col-md-1 fas fa-map-marker-alt studentInfoIcon"></i>
							  		<span class='personInfoLabel'>Address:</span> 
							  		<span class='studAddress'>
							  			<input type="text" value='493 Sta. Catalina Subdivision Yati Liloan, Cebu 6002' placeholder='Address' class="form-control col-md-offset-1" id="addressEdit" name='addressEdit'>
							  		</span>
							  	</p>
							  	<p>
							  		<i class="col-md-1 fas fa-church studentInfoIcon"></i>
							  		<span class='personInfoLabel'>Religion:</span> 
							  		<span class='studReligion'>
							  			<input type="text" value='Roman Catholic' placeholder='Religion' class="form-control col-md-offset-1" id="studReligion" name='studReligion'>
							  		</span>
							  	</p>
							  	<p>
							  		<i class="col-md-1 fas fa-male studentInfoIcon"></i>
							  		<span class='personInfoLabel'>Nationality:</span> 
							  		<span class='studNationality'>
							  			<input type="text" value='Filipino' placeholder='Nationality'' class="form-control col-md-offset-1" id="studNationality" name='studNationality'>
							  		</span>
							  	</p>
							  </div>
						</div>

						<p class='personInfoHeader'><i class="fas fa-phone"></i> Contact Information</p>
				        <hr class='hrModal'>
				        <div class="row personInfoDetails">
						  <div class="col-md-10 personInfoFirst">
						  	<p>
						  		<i class="col-md-1 fas fa-phone-square studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Telephone Number:</span> 
						  		<span class='telNum'>
						  			<input type="text" value='(032) 520 - 2073' placeholder='Telephone Number' class="form-control col-md-offset-1" id="telNum" name='telNum'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-mobile-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Mobile Number:</span> 
						  		<span class='mobNum'>
						  			<input type="text" value='09664118929' placeholder='Mobile Number' class="form-control col-md-offset-1" id="mobNum" name='mobNum'>
						  		</span>
						  	</p>
						  </div>
						</div>

						<p class='personInfoHeader'><i class="fas fa-user-shield"></i> In Case of Emergency</p>
				        <hr class='hrModal'>
				        <div class="row personInfoDetails">
						  <div class="col-md-10 personInfoFirst">
						  	<p>
						  		<i class="col-md-1 fas fa-user studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Guardian Name:</span> 
						  		<span class='guardianName'>
						  			<input type="text" value='Michael M. Talisaysay' placeholder='Guardian Name' class="form-control col-md-offset-1" id="guardName" name='guardName'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-map-marker-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Address:</span> 
						  		<span class='guardianAddress'>
						  			<input type="text" value='493 Sta. Catalina Subdivision Yati Liloan, Cebu 6002' placeholder='Address' class="form-control col-md-offset-1" id="guardAddress" name='guardAddress'>
						  		</span>
						  	</p>
						  	<p>
						  		<i class="col-md-1 fas fa-mobile-alt studentInfoIcon"></i>
						  		<span class='personInfoLabel'>Contact Number:</span> 
						  		<span class='mobNum'>
						  			<input type="text" value='(032) 520 - 2073' placeholder='Telephone Number' class="form-control col-md-offset-1" id="guardNum" name='guardNum'>
						  		</span>
						  	</p>
						  </div>
						</div>
			        </div>
			        <div class="modal-footer">
			        	<button type="submit" class="btn btn-default btnModalStudent"><i class="fas fa-pen"></i> Update</button>
			          	<button type="button" class="btn btn-default btnCloseModal" data-dismiss="modal">Close</button>
			        </div>
		    	</form>
		      </div>
		    </div>
		</div>

		<!-- Modal Student Delete Information -->
		<div class="modal fade" id="studentDeleteModal" role="dialog">
		    <div class="modal-dialog modal-sm">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title studentName">Delete Student</h4>
		        </div>
		        <div class="modal-body">
		          Are you sure you want to delete <span class='studName'>Student's Name</span>
		        </div>
		        <div class="modal-footer">
		        	<button type="button" class="btn btn-default btnModalStudent">Delete</button>
		          	<button type="button" class="btn btn-default btnCloseModal" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		      
		    </div>
		</div>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>