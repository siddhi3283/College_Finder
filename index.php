<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Favicon -->
    <link href="img/favicon.ico?v=2" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

	<!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

	
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<!--  -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="Home.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">
                <i class="fa fa-book me-3"></i>College Finder
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="Home.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <a href="team.html" class="nav-item nav-link">Team</a>
                <!--  -->
                <div class="content">
                    <!-- notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <h3>
                            <?php 
                                echo $_SESSION['success']; 
                                unset($_SESSION['success']);
                            ?>
                            </h3>
                        </div>
                    <?php endif ?>
                    <?php  if (isset($_SESSION['username'])) : ?>
                        <p> <a href="index.php?logout='1'" >logout</a> </p>
                    <?php endif ?>
                </div>
                <!--  -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="./img/homebg.jpg" alt="" style="height: 650px; width: 1400px;">

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown">Lost Your Way?</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Find the best college in seconds on this website the
                                build a career of your choice.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" style="background-color:#06BBCC;height: 500px;">
        <div class="text-center pb-2" style="padding-top: 60px;">
            <hr style="border-top: 2px solid black; width: 30%; margin-top: 0; margin-bottom: 0px;margin: auto;;">
            <h1 class="section-title px-5" style="margin: -1px;"><span class="px-2">Major Streams</span></h1>
            <hr style="border-top: 2px solid black; width: 40%; margin-top: 10px; margin-bottom: 0;margin: auto;">
            <br><br>
        </div>

        <div class="container">
            <div class="row g-1">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="./Artsstream.html">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x mb-4">Arts</i><br>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a href="./science.html">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x mb-4">Science</i>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                    <a href="./commerce.html">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x mb-4">Commerce</i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="text-center pb-2">
                    <h1 class="section-title px-5 "><span class="px-2">Our Services</span></span></h1>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-1.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Career Guidance</h4>
                            <p class="card-text">Explore our comprehensive resources to find your perfect career match
                                based on your interests, skills, and personality
                                traits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-2.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">College Guidance</h4>
                            <p class="card-text">When searching for colleges, consider your academic goals and the type
                                of program that you want to pursue.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Personal Counselling</h4>
                            <p class="card-text">We understand that choosing a college can be a daunting task, but we're
                                here to help with our personal counselling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">College Comparison</h4>
                            <p class="card-text">With our college comparison feature, you can quickly and easily compare
                                different colleges based on factors such as
                                location, tuition costs, acceptance rates, and more</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Trusted Student Reviews</h4>
                            <p class="card-text">Our student reviews offers an authentic and unfiltered view of college
                                life, giving you an honest perspective on
                                everything from academics </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Diversity and Inclusion Resources</h4>
                            <p class="card-text">We believe that every student should have access to a college searching
                                experience and supports their
                                unique identity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->
    <!-- Registration Start -->
    <div class="container-fluid py-5 bg-primary text-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <h1 class="display-4 mb-4">Register for a Personal Counselling today!</h1>
                    <p class="lead mb-4">Feeling stuck? Our personal counseling services can help you break free from
                        negative patterns and achieve your goals.
                        Register today and take the first step towards a brighter future!</p>
                    <ul class="list-unstyled mb-5">
                        <li><i class="fas fa-check mr-2"></i>Appointment scheduling.</li>
                        <li><i class="fas fa-check mr-2"></i>Confidentiality guarantee.</li>
                        <li><i class="fas fa-check mr-2"></i>Multicultural counseling services</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h2 class="text-white m-0">Register Today</h2>
                        </div>
                        <div class="card-body rounded-bottom bg-light p-5">
                            <div>
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">
                                  <a href="register.php" class="text-white mb-2">Sign Up </a>  
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="section-title px-5"><span class="px-2">Meet Our Developers</span></h1>

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="" alt="">
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Ayush Chauhan</h4>
                    <i></i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="" alt="">
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Garv Gupta</h4>
                    <i></i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="" alt="">
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Harshit Raj</h4>
                    <i></i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="" alt="">
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Sneha</h4>
                    <i></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Footer Start -->
    
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div style="width: 400px; margin: auto;" class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="./about.html">About Us</a>
                    <a class="btn btn-link" href="./Team.html">Team</a>
                </div>
                <div style="width: 400px; margin: auto;" class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-3">Contact</h4>
                    <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-3"></i>Chandigarh University, Mohali,
                        Panjab</p>
                    <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>+918950221649</p>
                    <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>+919319009805</p>
                    <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>+918102165205</p>
                    <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>collegefinder@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social btn-primary" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social btn-primary" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social btn-primary" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social btn-primary" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End  -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<!--  -->
</body>
</html>