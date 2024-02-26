<?php
require_once('connection.php');
ob_start();
session_start();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message= $_POST['message'];
    

$inserted = "INSERT INTO contactus (name,email,subject,message) VALUES ('$name','$email','$subject','$message')" ;
mysqli_query ($connection, $inserted);
if($inserted)
{
echo "<script>alert('Your Message Submitted Successfully.'); </script>"; 	
}
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
<title>Pak Auto service &amp; Car Repair HTML Template</title>
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
              <li><i class="fa fa-envelope" aria-hidden="true"></i> pakautoservice.com</li>
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
                <li><a href="index.php">Home</a>
                                    
                <li><a href="about-us.php">About Us</a>
                  
               
                   
                    <li><a href="pricing-plan.php">Pricing Plan</a></li>
      
                </li>
                                
              
                    <li><a href="gallery-with-slider.php">Gallery</a></li>
                  
               
                    
              
                <li><a href="contact.php">Contact Us</a></li>
				<li><a href="admin/register.php">Sign Up</a>
                <li><a href="#">Login</a>
                  <ul>
                    <li><a href="admin-login.php">Admin Login</a></li>
                    <li><a href="user-login.php">User Login</a></li>
                   
                  </ul>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div> 
<!--  end navigation -->

<!--  contact page   -->
  <div id="contact-page" class="contact-page-main-block">
    <div class="section text-center">
      <h3 class="section-heading">Contact Us</h3>
   
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4"> 
          <div class="contact-block">
            <ul>
              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">+923361234913</a></li>
              <li><i class="fa fa-mobile-phone" aria-hidden="true"></i><a href="#">+92304 7533 611</a></li>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Sadiq Canal,Rahim Yar Khan</a></li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#">pakautoservice.com</a></li>
              <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#">www.pakautoservice.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9  col-sm-8">
          <form id="contact-form" class="contact-form" method="post" action="contact.php">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail">
                </div> 
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div> 
            <div class="message">
              <textarea id="message" name="message" rows="6" placeholder="Message"></textarea>
            </div> 
           <div class="text-center "><button class="btn btn-primary btn-lg" type="submit" name="submit">Send Message</button></div>             
          </form> 
        </div>
      </div>
    </div>
  </div>         
<!--  end contact page  -->

<!--  footer -->
  <footer id="footer" class="footer-main-block">
    <div class="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-about footer-widget">
              <h5 class="footer-heading">About Us</h5>
              <img src="images/logo-white.png" class="img-responsive" alt="logo">
              <p>Pak Auto service is the premier mobile detailing service in Rahim Yar Khan.</p>              
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
              <p>&copy; Copyrights 2022 <a href="index.html">Pak auto service</a>. | All Rights Reserved.</p>
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
<script>
  jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
  });
  function initialize(){
    var myLatLng = {lat: 25.3500, lng: 74.6333}; // Insert Your Latitude and Longitude For Footer Wiget Map
    var mapOptions = {
      center: myLatLng, 
      zoom: 15,
      disableDefaultUI: true,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]     
    }
    // For Footer Widget Map
    var map = new google.maps.Map(document.getElementById("location"), mapOptions);
    var image = 'images/icons/map.png';
    var beachMarker = new google.maps.Marker({
      position: myLatLng, 
      map: map,   
      icon: image
    });    
  }
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>