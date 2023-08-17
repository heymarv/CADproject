<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
            <?php
session_start();
$currentUserId = $_SESSION['user_id'];
// Replace the following variables with your actual database credentials
$host = "localhost"; // For example, "localhost" or IP address like "127.0.0.1"
$username = "root";
$password = "";
$dbname = "project"; // Replace with your database name

// Establish a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'cart_actions.php';
$cartItems = getCartItems($currentUserId);

?>
    
    <head>
    <head>
        <meta charset="utf-8">
        <title>UGEE M708 V3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav text-uppercase">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">    
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <i class="fa fa-shopping-bag"></i>
                                </a>
                                <ul class="dropdown-menu cart-list">
                                    <ul class="dropdown-menu cart-list">
                                    <?php foreach ($cartItems as $item): ?>
                                    <li>
                                    <h6><a href="#"><?php echo $item['name']; ?></a></h6>
                                    <p class="m-top-10"><?php echo $item['quantity']; ?>x - <span class="price">$<?php echo number_format($item['price'], 2); ?></span></p>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                </ul>
                            </li>
                        </ul>
                    </div>         
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">

                            <div id="homepage-text" class="logo logo-display">BAMBÚ</div>
                            <div id="homepage-text-scroll" class="logo logo-scrolled">BAMBÚ</div>

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="index.php">home</a></li> 
							<li><a href="aboutus.php">about</a></li> 							                   
                            <li><a href="product.php">products</a></li> 							                                   
                            <li><a href="contactus.php">contact</a></li>   
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  


            </nav>


            <!--Home Sections-->

            <section id="hello" class="model-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="model_text">
                                <h1 class="text-white text-uppercase">UGEE M708 V3 Graphics Drawing Tablet</h1>
                                <ol class="breadcrumb text-uppercase">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><a href="#">UGEE</a></li>
                                    <li class="active"><a href="#">M708 V3 Graphics Drawing Tablet</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--Product Details Section-->
            <section id="m_details" class="m_details roomy-100 fix">
                <div class="container">
                    <div class="row">
                        <div class="main_details">
                            <div class="col-md-6">
                                <div class="m_details_img">
                                    <img src="https://i.ibb.co/sqJ9Ng2/i02-ugeebig.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m_details_content m-bottom-40">
                                    <h2>UGEE M708 V3 Graphics Drawing Tablet,10X6 Inches Drawing Digital Tablet with 8 Hot Keys 8192 Levels Pen | 
                                        Compatible with Chromebook, Linux, Windows 7/8/10, MAC OS 10.10</h2>
                                    <p>Large Space Sensitive Digital Drawing Tablets: Pro design UGEE M708 graphic drawing tablet, 
                                        10 x 6-inch sizeable active drawing space with papery texture surface. A large active 
                                        area allows you to release your inspiration ideally, provides enormous and smooth Drawing for your 
                                        digital artwork creation.</p>
                                    <p>8192 Pressure Technology Stylus: Battery-free stylus technology offers 8192 levels of pressure
                                        sensitivity, with high accuracy to match with your screen display. In addition, this 
                                        passive stylus can support mouse function, while pen and eraser offer no-lag sketch, painting 
                                        experience.</p>
                                    <p>Powerful Compatibility: This digital drawing pen tablet performs well with Windows 10 / 8 / 7, Mac 
                                        OS 10.10, Linux, or above.Perfectly compatible with Autodesk Sketchbook/Krita/Adobe Photoshop/
                                        Photoshop CC/Illustrator/Lightroom/Corel Painter/drawing software.</p>
                                    <p>Intelligent Shortcuts Design: 8 customizable express keys for Drawing. Support shortcuts 
                                        for up to eight drawing software. After you set the shortcut keys in each software, and 
                                        when you use multiple software simultaneously, the graphic tablet can intelligently detect 
                                        the function of each shortcut keys preset in each drawing software, while you are switching between 
                                        software. Optimize your drawing productivity and efficiency.</p>
                                    <p>Widely Uses Plug and Use: It makes your work more manageable with the UGEE driver. 
                                        With 7.8MM thickness and the light weight make easy to carry, you can use it for remote 
                                        education and conferencing. Perfect for taking notes, jotting down ideas and business signature 
                                        during web conferencing, and remote working.</p>
                                    
                                </div>
                                <hr />
                                <div class="person_details m-top-40">
                                    <div class="row">
                                        <div class="col-md-5 text-left">
                                            <p>Product Name:</p>
                                            <p>Year:</p>
                                            <p>Height:</p>
                                            <p>Width:</p>
                                            <p>Thickness:</p>
                                            <p>Battery Life:</p>
                                            <p>Color:</p>
                                        </div>
                                        <div class="col-md-7 text-left">
                                            <p>UGEE M708 V3</p>
                                            <p>2021</p>
                                            <p>14"</p>
                                            <p>9"</p>
                                            <p>1.8"</p>
                                            <p>4 Weeks</p>
                                            <p>Black</p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="skill_bar m-top-70">    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                <h6 class="one">Overall Rating <span class="pull-right">75%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->

                                            <div class="teamskillbar clearfix m-top-50" data-percent="63%">
                                                <h6 class="two">Battery Life <span class="pull-right">63%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->
                                        </div>

                                        <div class="col-md-6">
                                            <div class="teamskillbar clearfix m-top-50" data-percent="83%">
                                                <h6 class="three">Display <span class="pull-right">83%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->

                                            <div class="teamskillbar clearfix m-top-50" data-percent="60%">
                                                <h6 class="foure">Storage <span class="pull-right">60%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End off row -->
                </div> <!-- End off container -->
            </section> <!-- End off Details Section -->



            <!--Testimonial Section-->
            <section id="testimonial" class="testimonial fix roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_testimonial text-center">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="https://i.ibb.co/8PQ3nGN/customer1.jpg" alt="" />
                                                <h6 class="m-top-20">Emily Martinez</h6>
                                                <h5><em>Business Professional</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I'm impressed with bambu's efficiency. Their website is user-friendly, 
                                                and the checkout process was seamless. My new tablet was delivered on time and in perfect condition. 
                                                Great job, team! </p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="https://i.ibb.co/mD7jwwX/customer2.png" alt="" />
                                                <h6 class="m-top-20">Jessica Morgan</h6>
                                                <h5><em>Student</em> </h5>
                                            </div>

                                            <p class=" m-top-40">As a college student, bambu has been a lifesaver. 
                                                Their prices are unbeatable, and the tablet I purchased works flawlessly for my studies 
                                                and entertainment needs. I highly recommend them!</p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="https://i.ibb.co/LzNnHdz/customer3.png" alt="" />
                                                <h6 class="m-top-20">Sarah Johnson</h6>
                                                <h5><em>Graphic Designer</em> </h5>
                                            </div>

                                            <p class=" m-top-40">"I absolutely love bambu! They have an impressive 
                                                range of tablets, and their customer service is outstanding. I found the perfect 
                                                drawing tablet for my work, and it arrived quickly without any hassles. </p>

                                        </div>
                                    </div>

                                </div>


                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <span class="slash">/</span>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->

                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />
                <br />

                <div class="container">
                    <div class="row">
                        <div class="main_cbrand text-center">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="https://i.ibb.co/9cYgxHF/logo1.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="https://i.ibb.co/9brqnsR/logo2.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img class="" src="https://i.ibb.co/1XPNvJL/logo3.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src=https://i.ibb.co/tswhm2j/logo4.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="https://i.ibb.co/fvBpJMF/logo5.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href=""><img src="https://i.ibb.co/P9RLfBj/logo6.jpg" alt="" /></a> 
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section> <!--End off Testimonial section -->


            <!--Contact Us Section-->
            <section id="contact" class="contact fix">
                <div class="container">
                    <div class="row">
                        <div class="main_contact p-top-100">

                            <div class="col-md-6 sm-m-top-30">
                                <form class="" action="process_form.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"> 
                                                <label>Your Name *</label>
                                                <input id="first_name" name="name" type="text" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Your Email *</label>
                                                <input id="email" name="email" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
    <div class="form-group"> 
        <label>Your Message *</label>
        <textarea name="message" class="form-control" rows="6"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">SEND MESSAGE <i class="fa fa-long-arrow-right"></i></button>
    </div>
</div>


                                    </div>

                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="contact_img">
                                    <img src="https://i.ibb.co/XZ7XTxg/i01-person-using-ipad.jpg" alt="" />
                                </div>
                            </div>


                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->

            <!--Company section-->

            <section id="company" class="company bg-light">
                <div class="container">
                    <div class="row">
                        <div class="main_company roomy-100 text-center">
                            <h3 class="text-uppercase">bambu.</h3>
                            <p>7500 Dover Road Singapore 139651</p>
                            <p>(+65) 90503211  -  info@bambu.com</p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->


            <footer id="footer" class="footer bg-mega">
                <div class="container">
                    <div class="row">
                        <div class="main_footer p-top-40 p-bottom-30">
                            <div class="col-md-6 text-left sm-text-center">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Made with 
                                    <i class="fa fa-heart"></i>
                                    by Marvyn, Azhar, Kumar & Hakim
                                </p>
                            </div>
                            <div class="col-md-6 text-right sm-text-center sm-m-top-20">
                                <ul class="list-inline">
                                    <li><a href="">Facebook</a></li>
                                    <li><a href="">Twitter</a></li>
                                    <li><a href="">Instagram</a></li>
                                    <li><a href="">Pinterest</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>


        <!-- paradise slider js -->

        <!--
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
                <script src="assets/js/gmaps.min.js"></script>
        
                <script>
                    function showmap() {
                        var mapOptions = {
                            zoom: 8,
                            scrollwheel: false,
                            center: new google.maps.LatLng(-34.397, 150.644),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                        $('.mapheight').css('height', '350');
                        $('.maps_text h3').hide();
                    }
        
                </script>-->





        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
