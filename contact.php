<!DOCTYPE html>
<?php

	if(isset($_POST[‘email‘]) && $_POST[’email’] != ‘ ’){

		if ( filter_var($_POST[‘email’], FILTER_VALIDATE_EMAIL) ) {
		$userName = $_POST	[‘name‘]);
        $userEmail = $_POST	[‘email‘]);
        $messageSubject = $_POST[‘subject‘]);
        $message = $_POST[‘message‘]);

        $to = a_frankow@web.de;
        $body = “”;

        $body .= “ From: “.$userName.  “ \r\n“;
        $body .= “ Email: “.$userEmail.  “ \r\n“;
        $body .= “ Message: “.$message.  “ \r\n“;

        mail($to,$messageSubject,$body);
        $mesage_sent = true;
        }
        Else{
        $mesage_sent = false;

      }

	    }

?>

<html lang="en">
<head>
    <title>Square - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span>FrankikoProjects.</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle"
                type="button"
                data-toggle="collapse"
                data-target="#ftco-nav"
                aria-controls="ftco-nav"
                aria-expanded="false"
                aria-label="Toggle navigation">
        </button>

        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="home.html" class="nav-link" data-nav-section="home"><span>Home</span></a></li>
                <li class="nav-item"><a href="About Me.html" class="nav-link" data-nav-section="about"><span>About me</span></a></li>
                <li class="nav-item"><a href="Business2.html" class="nav-link" data-nav-section="projects"><span>Business</span></a></li>
                <li class="nav-item"><a href="tech2.html" class="nav-link" data-nav-section="projects"><span>Tech</span></a></li>
                <li class="nav-item"><a href="creativity2.html" class="nav-link" data-nav-section="projects"><span>Creative</span></a></li>
                <li class="nav-item cta"><a href="ContactMe.html" class="nav-link">Contact</a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>
                <li class=""><a href=" " class="nav-link" data-nav-section=" "><span>  </span></a></li>

            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/vietnam.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Contact</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
                <p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
                <p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
            </div>
        </div>
    </div>
</section>
<p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
<p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
<p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">


                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>a_frankow@web.de</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+49 17630452774</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10377.585542760025!2d11.087320346454755!3d49.439224772557175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479f5770d2ba010b%3A0xe8f28dead1c67937!2zQmxlaXdlacOfLCA5MDQ2MSBOw7xybmJlcmc!5e0!3m2!1sde!2sde!4v1611256230983!5m2!1sde!2sde" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>            </div>
            </div>
            <?php
	If($message_sent):
          ?>
            <h3> thank you </h3>
            <?php
	    Else:
          ?>
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="contact.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">Send Message!</button>
                    </div>
                </form>
            </div>
            <?php
            endif;
            ?>
</section><!-- End Contact Section -->
<p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
<p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>
<p> <span class="mr-2"><a href="index.html"></a></span> <span class="mr-2"><a href=> </a></span> </p>

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">FRANKIKOPROJECTS.</h2>
                    <p>It`s a pleasure to present myself and my projects.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://www.linkedin.com/in/alexander-frankow/"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/alessandro_frankiko/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-3">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="Business2.html"><span class="icon-long-arrow-right mr-2"></span>Business</a></li>
                        <li><a href="tech2.html"><span class="icon-long-arrow-right mr-2"></span>Tech</a></li>
                        <li><a href="creativity2.html"><span class="icon-long-arrow-right mr-2"></span>Creative</a></li>
                        <li><a href="About Me.html"><span class="icon-long-arrow-right mr-2"></span>About Me</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Nuremberg, Germany</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+49 17630452774</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">a_frankow@web.de</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>