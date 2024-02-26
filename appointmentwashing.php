<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['username']))
{
  $my_admin=$_SESSION['username'];
header('Location:user-login.php'); 
} 

$user=$_SESSION['username'];


 
if(isset($_POST['submit']))
{
    $service = $_POST['service-type'];
    $make = $_POST['vehical-make'];
  $number = $_POST['number'];
  $date = $_POST['appointment-date'];
     $time= $_POST['appointment-time'];
  $name= $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
   $username = $user;

$inserted = "INSERT INTO `wash`( `username`, `service`, `type`, `number`, `date`, `time`, `name`, `email`, `phone`, `message`) VALUES ('$user','$service', '$make', '$number', '$date', '$time','$name','$email','$phone','$message')" ;
mysqli_query ($connection, $inserted);
echo "<script>alert('Request Submitted'); </script>"; 
}
else
{
}



?>

<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2016 .
**********************************************************************************************************  -->
<!-- 
Template Name: Auto Plus – Car Wash and Car Repair HTML Template
Version: 1.0.0
Author: Media City
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Pak Auto – Car Wash &amp; Car Repair HTML Template</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Auto Plus" />
<meta name="keywords" content="car wash, html template, car wash template, auto plus, car repair, auto wash, auto detail, auto detailing, car, cleaning, mechanic, repair, wash, car service, workshop">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="images/favicon/favicon.ico"> <!-- favicon-icon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="css/icon-font.css" rel="stylesheet" type="text/css"/> <!-- icon-font css -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Poppins:400,500,700" rel="stylesheet"> <!-- google font -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
<!--  top bar -->
  <div class="top-bar hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="info-bar">
            <ul>
              <li><i class="fa fa-envelope" aria-hidden="true"></i> pakauto@service.com</li>
              <li>|</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>(+92) 304 7533 611</li>
            </ul>
          </div>          
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="top-bar-right">
            
            <div class="social-icon">
              <ul>
                <li><a href="page.html" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="page.html" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="page.html" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="page.html" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end top bar -->
<!--  navigation -->
  <div class="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="navigation">
            <div id="cssmenu">
               <ul>
                <li><a href="user-panel.php">Home</a>
                <li><a href="appointmentwashing.php">Washing Appointment</a>
                <li><a href="appointment-mechanic.php">Mechanic Appointment</a>
                <li><a href="book-a-car.php">Book A Car</a>
                                  
                <li><a href="logout.php">Logout</a>
               </ul> 
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div> 
<!--  end navigation -->

<!--  appointments -->
  <div id="appointments" class="appointment-main-block appointment-two-main-block">
    <div class="container">
      <div class="row">
        <div class="section text-center">
          <h3 class="section-heading text-center">Get an Appointment</h3>
          <p class="sub-heading text-center"></p>
        </div>
        <div class="col-md-4 hidden-sm">
          <div class="appointment-img">
            <img src="images/appointment.jpg" class="img-responsive" alt="Appointment">
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="appointment-block">
            <form id="appointment-form" class="appointment-form" method="post" action="appointment.php">                            
              <h5 class="form-heading-title"><span class="form-heading-no">1.</span>Vehicle Information</h5>
              <div class="row">
                <div class="col-sm-4">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="service-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="drp-name" data-bind="label">Choose Service Type</span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu service-type" aria-labelledby="service-type" name="service-type">
                      <li value="Basic Washings"><a href="#">Basic Washing</a></li>
                      <li value="Deluxe Washing"><a href="#">Deluxe Washing</a></li>
                      <li value="Ultimate Washing"><a href="#">Ultimate Washing</a></li>
                      <li value="Super Washing"><a href="#">Super Washing</a></li>
                    </ul>
                    <input type='hidden' name='service-type' id="service-type">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="vehical-make" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="drp-name" data-bind="label">Choose Vehicle Type</span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu vehical-make" aria-labelledby="vehical-make" name="vehical-make">
                      <li value="Regular Car"><a href="#">Regular Car</a></li>
                      <li value="Medium Car"><a href="#">Medium Car</a></li>
                      <li value="Compact SUV"><a href="#">Compact SUV</a></li>
            <li value="Mini Van"><a href="#">Mini Van</a></li>
            <li value="Pickup Truck"><a href="#">Pickup Truck</a></li>
            <li value="Cargo Truck"><a href="#">Cargo Truck</a></li>
                    </ul>
                    <input type='hidden' name='vehical-make' id="vehical-make">
                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="number" id="vehical-model" placeholder="Enter Car Number" required>
                </div>
              </div>
              <h5 class="form-heading-title"><span class="form-heading-no">2.</span>Appointment Information</h5>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="appointment-date" class="form-control date-pick" id="appointment-date" placeholder="Appointment Date">
                </div>
                <div class="col-sm-6">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="appointment-time" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="drp-name" data-bind="label">Appointments Time-frame</span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu appointment-time" aria-labelledby="appointment-time" name="appointment-time">
                      <li value="Morning"><a href="#">Morning</a></li>
                      <li value="Afternoon"><a href="#">Afternoon</a></li>
                      <li value="Evening"><a href="#">Evening</a></li>
                    </ul>
                    <input type='hidden' name='appointment-time' id='appointment-time'>
                  </div>
                </div>
              </div>
              <h5 class="form-heading-title"><span class="form-heading-no">3.</span>Contact Details</h5>
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                </div>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="col-sm-12">
                  <textarea id="message" name="message" rows="6" placeholder="Message"></textarea>
                </div>
              </div>
               <div>
                        <input type="submit" name="submit" value="Book Now" class="btn btn-lg btn-primary btn-block" >
      </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end appointments -->
<!--  footer -->
  <footer id="footer" class="footer-main-block">
    <div class="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-about footer-widget">
              <h5 class="footer-heading">About Us</h5>
              <img src="images/logo-white.png" class="img-responsive" alt="logo">
              <p>Pak Auto services is the premier mobile detailing service in Rahim Yar Khan.</p>              
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-services footer-widget">
              <h5 class="footer-heading">Our Services</h5>
              <ul>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Vehicle Hand Wash Service</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Headlight Lens Restoration Service</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Scratch Removal Service</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Tar Removal Service</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Odor Elimination Service</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Engine Cleaning Service</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Valet Car Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-opening footer-widget">
              <h5 class="footer-heading">Opening Hours</h5>
              <div class="row">
                <div class="col-xs-5">
                  <div class="opening-day">Monday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">Tuesday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">Wednesday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">Thursday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">Friday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">Saturday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">Sunday</div>
                </div>
                <div class="col-xs-7">
                  <div class="opening-time">9:00 AM - 8:00 PM</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-subscribe footer-widget">
              <h5 class="footer-heading">Subscribe Newsletter</h5>
              
              <form id="subscribe-form" class="subscribe-form">
                <div class="form-group">
                  <label class="sr-only">Your Email address</label>
                  <input type="email" class="form-control" id="mc-email" placeholder="Enter email address">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                <label for="mc-email"></label>
              </form>
              <div class="social-icon">
                <span>Follow us on:</span>
                <ul>
                  <li><a href="page.html" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <hr>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text text-center">
              <p>&copy; Copyrights 2022 <a href="index.html">Pak Auto Service</a>. | All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--  end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.appear.js"></script> <!-- progress bar js -->
<script type="text/javascript" src="js/jquery.countdown.js"></script>  <!-- event countdown js -->
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- bootstrap datepicker js--> 
<script type="text/javascript" src="js/jquery.elevatezoom.js"></script> <!-- image zoom js-->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<!-- end jquery -->
</body>
<!--body end -->
</html>