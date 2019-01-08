<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8"/>
        <title>GSIS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!-- <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" /> -->
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <!-- <link rel="shortcut icon" href="../favicon.ico">  -->
        <link rel="icon" href="assets/images/GTNALogo.png">
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="assets/css/indexStyle.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="assets/css/gtnaLogin.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" media="all"/>
		<script type="text/javascript" src="assets/js/modernizr.custom.86080.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">

        <?php include 'mysqlCon.php'; ?>
    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>op·pur·tun·ity</h3></div></li>
            <li><span>Image 02</span><div><h3>com·it·ted</h3></div></li>
            <li><span>Image 03</span><div><h3>gu·i·ded</h3></div></li>
            <li><span>Image 04</span><div><h3>en·rich·ment</h3></div></li>
        </ul>
        <div class="container">
            <div class='row LoginHeader'>
                <img class='GTNALogo' src='assets/images/GTNALogo.png'>
                <h1 class='header1'>GT Northeast Academy</h1>
                <h2 class='header2'>Student's Information System</h2>
            </div>
            <!-- <div class="row loginButtons col-md-offset-4">
                <div class="col-md-3">.col-md-1</div>
                <div class="col-md-3">.col-md-1</div>
            </div> -->
            <div class="row loginContainer col-md-4 col-md-offset-4">
                <?php
                    if(isset($_POST['idNumber']) && isset($_POST['password'])){
                        $sql = "SELECT * FROM faculty WHERE id_number='".$_POST['idNumber']."' AND password='".$_POST['password']."'";
                        $result = $conn->query($sql);

                        $row = mysqli_fetch_assoc($result);
                        if($row){
                            // Start the session
                            session_start();
                            // Set session variables
                            $_SESSION["idNumber"] = $row['id_number'];
                            $_SESSION["facultyName"] = $row['faculty_name'];

                            echo $_SESSION["idNumber"];

                            header('Location: homepage/homepage.php');
                        }else{
                            echo "ID Number/Password is incorrect.<br>";
                        }
                        // echo $result;

                        // if ($result->num_rows > 0) {
                        //     // output data of each row
                        //     while($row = $result->fetch_assoc()) {
                        //         echo "id: " . $row["id_number"]. " - Name: " . $row["faculty_name"]. "<br>";
                        //     }
                        // } else {
                        //     echo "0 results";
                        // }
                        // $conn->close();
                    }

                    // else{
                    //     echo "empty fields";
                    // }
                   
                    

                ?>
                <i class="fas fa-user-alt"></i>
                <!-- <i class="fas fa-user-circle"></i> -->
                <p class='memberLogin'>Member Login</p>
                <form action="index.php" method='POST'>
                    <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-id-badge"></i></span></div>
                          <input type="text" class="form-control" id="idNumber" name='idNumber' placeholder="ID Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-key"></i></span></div>
                          <input type="password" class="form-control" id="password" name='password' placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn proceedButton" style='font-weight: 800;
                                                                            padding-right:30px;
                                                                            padding-left:30px;'>
                        Log In
                    </button>
                </form>

                <p class='passForgot1'>Forgot your password?</p>
                <p class='passForgot2'>Click <a href='' class='passReset'>here</a> to reset your password</p>


                <p class='footer1'>2018 &copy; GT Northeast Academy</p>
                <p class='footer2'>GSIS (GTNA Student's Information System)</p>
            </div>
        </div>
    </body>
</html>