<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Desh Infomation Technology</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <nav class="navbar m-menu navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png" alt=""></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                            <!-- <ul class="nav-cta hidden-xs">
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                        class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head-search">
                                                <form role="form">
                                                    <!-- Input Group -->
                            <!-- <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type Something">
                                                        <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                            <ul class="nav navbar-nav navbar-right main-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#">Branch</a></li>
                                <li><a href="result.php">Result</a></li>
                                <li><a href="courses.php">Courses</a></li>
                                <li><a href="registration.php">Registration</a></li>
                                <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Registration
                    <span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="m-menu-content">
                                                <ul class="col-sm-2">
                                                    <li><a href="#">Login</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>-->
                                <li><a href="contact.php">Any query</a></li>
                            </ul>
                        </div>
                        <!-- .navbar-collapse -->
                    </div>
                    <!-- .container -->
                </nav>
                <!-- .nav -->
                <section class="single-page-title course">
                    <div class="container text-center">
                        <h2 class="page-slider-title">Courses We offer</h2> </div>
                </section>
                <!-- .page-title -->
                <!-- Course Header -->
                <section class="course-header">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 well">
                            <div class="institute-name col-md-12">
                                <h1>DESH INFORMATION TECHNOLOGY</h1></div>
                            <div class="certified col-md-12">Bangladesh Government Approved <b>Reg.No C-131476</b></div>
                            <div class="certified col-md-12">Under The Ministry of Commerce </div>
                            <div class="certified col-md-12">Email :info@deshitbd.com</div>
                        </div>
                    </div>
                </section>
                <!-- Here goes code for course list table  -->
                <section class="course-list">
                    <div class="wrapper">
                        <table id="acrylic">
                            <thead>
                                <tr>
                                    <th>Name Of Course</th>
                                    <th>Education Qualification</th>
                                    <th>Course Fee</th>
                                    <th>Course Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--php code for fetching data from database and showing them dynamically inside a table-->
                                <?php
                                // Create connection
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "desh_info";
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT * FROM course_info";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                            echo "<td data-label='Name'>".$row["Name"]."</td>";
                                            echo "<td data-label='Age'>".$row["Education_Quality"]."</td>";
                                            echo "<td data-label='Weight'>".$row["Course_Fee"]."</td>";
                                            echo "<td data-label='Profession'>".$row["Course_Duration"]."</td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- .contact-form-->
                <footer class="footer">
                    <!-- Footer Widget Section -->
                    <div class="footer-widget-section">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-4 footer-block">
                                    <div class="footer-widget widget_text">
                                        <div class="footer-logo">
                                            <a href="#">
                                                <p class="h3 company-name">Desh Information Technology</p>
                                            </a>
                                        </div>
                                        <p>Continually matrix cross functional opportunities whereas ethical information. Compellingly streamline enabled human capital before resource-leveling internal or "organic".</p>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4 footer-block">
                                    <div class="footer-widget widget_text">
                                        <h3>We work for your profit</h3>
                                        <p>Distinctively expedite viral materials rather than out-of-the-box solutions. Credibly empower revolutionary ROI rather than unique products. Collaboratively maximize principle-centered ideas before highly efficient data. Phosfluorescently.</p>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4 footer-block last">
                                    <div class="footer-widget widget_text">
                                        <h3>Contact Us Today</h3> <address>
                            Call Us 666 777 888 OR 111 222 333<br>
                            Send an Email on <a href="mailto:#">contact@domain.com</a><br>
                            Visit Us 123 Fake Street- Blla 12358<br>
                            Fake Kingdom<br>
                        </address>
                                        <ul class="list-inline social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.Footer Widget Section -->
                    <div class="copyright-section">
                        <div class="container clearfix"> <span class="copytext">Copyright &copy; 2016 | <a href="index.html">Desh Information Technology Ltd.</a>&nbsp;&nbsp;&nbsp;Designed And Developed By: <strong style="color: #31aae2;">.com</strong></span>
                            <ul class="list-inline pull-right">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Admin Panel</a></li>
                                <li><a href="#">Branch</a></li>
                                <li><a href="#">Result</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- .copyright-section -->
                </footer>
                <!-- .footer -->
            </div>
            <!-- .content-wrapper -->
        </div>
        <!-- .offcanvas-pusher -->
        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Branch</a></li>
                        <li><a href="result.php">Result</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="contact.php">Any query</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .uc-mobile-menu -->
    </div>
    <!-- #main-wrapper -->
    <!-- Script -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/mobile-menu.js"></script>
    <script src="js/flexSlider/jquery.flexslider-min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
