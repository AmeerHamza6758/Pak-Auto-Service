<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['username']))
{
	$my_admin=$_SESSION['username'];
header('Location:user-login.php'); 
}
?>

<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2017 .
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
<title>Pak Auto Service</title>
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
              <li><i class="fa fa-envelope" aria-hidden="true"></i> pakauto@gmail.com</li>
              <li>|</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>(+92) 3047533611</li>
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
<!--  slider -->
  <div id="home-slider" class="home-slider">
    <div class="item home-slider-bg" style="background-image: url('images/slider-1.jpg')"> 
      <div class="container">
        <div class="slider-dtl">
          <h4 class="slider-sub-heading">We Care</h4>
          <h1 class="slider-heading">For Your Car</h1>
          <p>Pamper your car with a premier Full Service Handwash at PAS. This includes a 12-15 minute 100% handwash complete with interior vacuum and window cleaning.</p>
          <div class="slider-btn">
            <a href="#" class="btn btn-orange">Read More</a>
            <a href="#" class="btn btn-default">Contact Us</a>
          </div>
        </div>  
      </div>     
    </div>
    <div class="item home-slider-bg" style="background-image: url('images/slider-2.jpg')">  
      <div class="container">
        <div class="slider-dtl">
          <h4 class="slider-sub-heading">We Care</h4>
          <h1 class="slider-heading">For Your Car</h1>
          <p>Using our website, you can access the maintenance schedule of all your cars, get a fair and transparent price, book an appointment and make payments.</p>
          <div class="slider-btn">
            <a href="#" class="btn btn-orange">Read More</a>
            <a href="#" class="btn btn-default">Contact Us</a>
          </div>
        </div>  
      </div>      
    </div>
    <div class="item home-slider-bg" style="background-image: url('images/slider-3.jpg')">  
      <div class="container">
        <div class="slider-dtl">
          <h4 class="slider-sub-heading">We Care</h4>
          <h1 class="slider-heading">For Your Car</h1>
          <p>Our mission is to help people pick the right rental. Before you book, we will show you everything you need to know. From past customer ratings, what's included and pick-up information.</p>
          <div class="slider-btn">
            <a href="#" class="btn btn-orange">Read More</a>
            <a href="#" class="btn btn-default">Contact Us</a>
          </div>
        </div>  
      </div>      
    </div>
  </div>
<!--  end slider -->
<!--  who we are -->
  <div id ="who-we-are" class="who-we-are-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="section">
            <h3 class="section-heading">Who We Are?</h3>
            <p>Auto Sense car services is the premier mobile detailing service in Rahim Yar Khan. Our mission is simple, to deliver exceptional automotive detailing services to you our customer while at the same time making it as convenient and time efficient for you as possible all with the lowest possible price.</p>
          </div>
          <div class="row who-we-are-points">
            <div class="col-sm-6">
              <div class="who-we-are-block">
                <div class="who-we-are-icon">
                  <i class="fa fa-smile-o" aria-hidden="true"></i>
                </div>
                <div class="who-we-are-dtl">
                  <h5 class="who-we-are-heading">Time-Saver & Efficiency</h5>
                  <p>PAS saves you valuable time and money by coming to your home so you can accomplish other tasks.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="who-we-are-block">
                <div class="who-we-are-icon">
                 <i class="fa fa-money" aria-hidden="true"></i> 
                </div>
                <div class="who-we-are-dtl">
                  <h5 class="who-we-are-heading">Affordable Prices</h5>
                  <p>Save money in employee time and gas while getting more quality for your money than a regular car wash.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="who-we-are-block">
                <div class="who-we-are-icon">
                 <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </div>
                <div class="who-we-are-dtl">
                  <h5 class="who-we-are-heading">Quality Service</h5>
                  <p> Our mission is to provide you the best services in vehicle wash and detail. We are dedicated to giving you a 100% satisfaction guarantee.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="who-we-are-block">
                <div class="who-we-are-icon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="who-we-are-dtl">
                  <h5 class="who-we-are-heading">Feedback</h5>
                  <p>Peoples can send thier feedbacks to our site and tell us about our site.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 hidden-sm">
          <div class="who-we-are-img">
            <img src="images/who-we-are.jpg" class="img-responsive" alt="who-we-are">
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end who we are -->
<!--  services -->
  <div id="services" class="services-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Our Services</h3>
      
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-01.png" class="img-responsive" alt="service-01"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Vehicle Hand Wash</h5></a>
              <p>A car wash or auto wash is a facility used to clean the exterior and, in some cases, the interior.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-02.png" class="img-responsive" alt="service-02"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Headlight Lens Restoration</h5></a>
              <p>This is the act of refinishing headlight lenses that have become dull due to oxidation primarily.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-03.png" class="img-responsive" alt="service-03"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Scratch Removal</h5></a>
              <p> It removes the top layer completely, and works the color layer to fill the scratch.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-04.png" class="img-responsive" alt="service-04"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Tar Removal</h5></a>
              <p>Tar build up into a thick, hard layer if you don't clean it off regularly. If your car tends to pick up a lot of tar, plan to clean it every week.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-05.png" class="img-responsive" alt="service-05"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Odor Elimination</h5></a>
              <p>Need to freshen up your vehicle's interior? Eliminate car odors by using services of auto sense car services.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-06.png" class="img-responsive" alt="service-06"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Engine Cleaning</h5></a>
              <p>Engine carbon cleaning is a growing industry and a popular method of cleaning the inside of a vehicle's engine.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-07.png" class="img-responsive" alt="service-07"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Hazardous Cleaning</h5></a>
              <p>The safe decontamination and cleaning of areas that have been soiled by a bio-hazardous incident is vital in order to reduce and eliminate the risk of infection from exposure.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block text-center">
            <div class="service-icon">
              <a href="#"><img src="images/icons/service-08.png" class="img-responsive" alt="service-08"></a>
            </div>
            <div class="service-dtl">
              <a href="#"><h5 class="service-heading">Valet Service</h5></a>
              <p> In contrast to "self-parking", where customers find a parking space on their own, customers' vehicles are parked for them by a person called a valet.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!--  end services -->
<!--  gallery -->
  <div id="work-gallery" class="work-gallery-main-block">
    <div class="parallax" style="background-image: url('images/bg/work-gallery-bg.jpg')">
    <div class="overlay-bg"></div>
      <div class="container">
        <div class="section text-center">
          <h3 class="section-heading">Working gallery</h3>
          <p class="sub-heading">We make your travel, attractive, save and Secure.</p>
        </div>
        <div id="work-gallery-slider" class="work-gallery-slider">
          <div class="item work-gallery-block"> 
            <img src="images/gallery/gallery-01.jpg" class="img-responsive" alt="gallery-01">
            <div class="overlay-bg"><a href="images/gallery/gallery-01.jpg" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
          </div>
          <div class="item work-gallery-block"> 
            <img src="images/gallery/gallery-02.jpg" class="img-responsive" alt="gallery-02">
            <div class="overlay-bg"><a href="images/gallery/gallery-02.jpg" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
          </div>
          <div class="item work-gallery-block"> 
            <img src="images/gallery/gallery-03.jpg" class="img-responsive" alt="gallery-03">
            <div class="overlay-bg"><a href="images/gallery/gallery-03.jpg" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
          </div>
          <div class="item work-gallery-block"> 
            <img src="images/gallery/gallery-04.jpg" class="img-responsive" alt="gallery-04">
            <div class="overlay-bg"><a href="images/gallery/gallery-04.jpg" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
          </div>
          <div class="item work-gallery-block"> 
            <img src="images/gallery/gallery-05.jpg" class="img-responsive" alt="gallery-05">
            <div class="overlay-bg"><a href="images/gallery/gallery-05.jpg" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
          </div>
          <div class="item work-gallery-block"> 
            <img src="images/gallery/gallery-06.jpg" class="img-responsive" alt="gallery-06">
            <div class="overlay-bg"><a href="images/gallery/gallery-06.jpg" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
          </div>
        </div>
      </div>      
    </div>
  </div>
<!--  end gallery -->
<!--  team -->
 <center> <div id="team" class="team-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Our Awesome Team</h3>
        <p class="sub-heading">Alone we can do so little; together we can do so much.</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="team-block text-center">
            <div class="team-img">
              <a href="team-details.html"><img src="images/team/team-01.jpeg" class="img-responsive" alt="team-01">
              <div class="overlay-bg"></div></a>
            </div>
            <div class="team-dtl">
              <a href="team-details.html"><h6 class="team-heading">Ameer Hamza</h6></a>
              <div class="team-post">Service incharge</div>
              <div class="team-social">
                <ul>
                  <li><a href="page.html" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-block text-center">
            <div class="team-img">
              <a href="team-details.html"><img src="images/team/team-02.jpeg" class="img-responsive" alt="team-02">
              <div class="overlay-bg"></div></a>
            </div>
            <div class="team-dtl">
              <a href="team-details.html"><h6 class="team-heading">Rao Muzamil</h6></a>
              <div class="team-post">Online Car Booking</div>
              <div class="team-social">
                <ul>
                  <li><a href="page.html" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="page.html" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div></center>
<!--  end team -->
<!--  facts -->
  <div id="facts" class="facts-main-block">
    <div class="parallax" style="background-image: url('images/bg/facts-bg.jpg')">
    <div class="overlay-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-truck" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">1025</h2>
              <div class="facts-text">Vehicle Washed</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-car" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">850</h2>
              <div class="facts-text">Car Washed</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-smile-o" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">900</h2>
              <div class="facts-text">Happy Customers</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-coffee" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">500</h2>
              <div class="facts-text">Cup of Coffee</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end facts -->
<!--  plans -->
  <div id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Washing Plans</h3>
        
      </div>
      <div class="pricing-plan-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#plan-1" aria-controls="plan-1" role="tab" data-toggle="tab"><span><i class="icon-1"></i></span>Regular Car</a></li>
          <li role="presentation"><a href="#plan-2" aria-controls="plan-2" role="tab" data-toggle="tab"><span><i class="icon-3"></i></span>Medium Car</a></li>
          <li role="presentation"><a href="#plan-3" aria-controls="plan-3" role="tab" data-toggle="tab"><span><i class="icon-2"></i></span>Compact SUV</a></li>
          <li role="presentation"><a href="#plan-4" aria-controls="plan-4" role="tab" data-toggle="tab"><span><i class="icon-4"></i></span>Mini Van</a></li>
          <li role="presentation"><a href="#plan-5" aria-controls="plan-5" role="tab" data-toggle="tab"><span><i class="icon-6"></i></span>Pickup Truck</a></li>
          <li role="presentation"><a href="#plan-6" aria-controls="plan-6" role="tab" data-toggle="tab"><span><i class="icon-8"></i></span>Cargo Truck</a></li>
        </ul>
      </div>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="plan-1">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 499.00</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
                
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 699.00</h2>
                  <div class="pricing-duration">45 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Ultimate Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 899.00</h2>
                  <div class="pricing-duration">60 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                  </ul>
            
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Super Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1099.00</h2>
                  <div class="pricing-duration">100 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                    <li>Air Freshener</li>
                    <li>Triple Coat Hand Wax</li>
                  </ul>
           
                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="plan-2">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 699.00</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
               
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 899.00</h2>
                  <div class="pricing-duration">45 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Ultimate Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1099.00</h2>
                  <div class="pricing-duration">60 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                  </ul>
       
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Super Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1999.00</h2>
                  <div class="pricing-duration">100 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                    <li>Air Freshener</li>
                    <li>Triple Coat Hand Wax</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="plan-3">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 899.00</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1099.00</h2>
                  <div class="pricing-duration">45 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                  </ul>
      
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Ultimate Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1499.00</h2>
                  <div class="pricing-duration">60 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Super Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1999.00</h2>
                  <div class="pricing-duration">100 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                    <li>Air Freshener</li>
                    <li>Triple Coat Hand Wax</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="plan-4">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 999.00</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
             
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1499.00</h2>
                  <div class="pricing-duration">45 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                  </ul>
            
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Ultimate Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1999.00</h2>
                  <div class="pricing-duration">60 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Super Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 2499.00</h2>
                  <div class="pricing-duration">100 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                    <li>Air Freshener</li>
                    <li>Triple Coat Hand Wax</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="plan-5">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 999.00</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
           
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1099.00</h2>
                  <div class="pricing-duration">45 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                  </ul>
        
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Ultimate Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1459.00</h2>
                  <div class="pricing-duration">60 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                  </ul>
            
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Super Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 2499.00</h2>
                  <div class="pricing-duration">100 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                    <li>Air Freshener</li>
                    <li>Triple Coat Hand Wax</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="plan-6">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Basic Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1499.00</h2>
                  <div class="pricing-duration">25 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                  </ul>
 
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Deluxe Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 1999.00</h2>
                  <div class="pricing-duration">45 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                  </ul>
               
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Ultimate Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 2499.00</h2>
                  <div class="pricing-duration">60 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                  </ul>
           
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing-block text-center">
                <h6 class="pricing-heding">Super Washing</h6>
                <div class="pricing-price-block">
                  <h2 class="pricing-price">Rs 2999.00</h2>
                  <div class="pricing-duration">100 Mins</div>
                </div>
                <div class="pricing-dtl">
                  <ul>
                    <li>Exterior Hand Wash</li>
                    <li>Towel Hand Dry</li>
                    <li>Wheel Shine</li>
                    <li>Tire Dressing</li>
                    <li>Window In &amp; Out</li>
                    <li>Sealer Hand Wax</li>
                    <li>Interior Vacuum</li>
                    <li>Door Shut’s &amp; Plastics</li>
                    <li>Dashboard Clean</li>
                    <li>Air Freshener</li>
                    <li>Triple Coat Hand Wax</li>
                  </ul>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end plans -->
<!--  testimonials -->
  <div id="testimonials" class="testimonials-main-block">
    <div class="parallax" style="background-image: url('images/bg/testimonials-bg.jpg')">
    <div class="overlay-bg"></div>
      <div class="container">
        <div class="section text-center">
          <h3 class="section-heading">Feedback</h3>         
        </div>
        <div id="testimonials-slider" class="testimonials-slider">
          <div class="item testimonials-block"> 
            <div class="testimonials-dtl text-center">
              <p>“ This place is AWESOME! I have never been anything less than ecstatic about the quality of service.

As far as the review previously on here, there are holes in the vacuum heads for a reason, it helps with the suction”</p>
            </div>
            <div class="testimonials-client">
              <div class="testimonials-client-img">
                <img src="images/testimonials-client-01.jpg" class="img-responsive" alt="client-01">
              </div>
              <div class="testimonials-client-dtl">
                <h6 class="client-name">Ubaid ur Rehman</h6>
                <div class="client-since">Platinum user from 9 months</div>
              </div>
            </div>
          </div>
          <div class="item testimonials-block"> 
            <div class="testimonials-dtl text-center">
              <p>“ Pleasantly surprised by this car wash. I also love that the vacuums are free and are pretty powerful.This car wash is fast, friendly and does an awesome job for a great price.”</p>
            </div>
            <div class="testimonials-client">
              <div class="testimonials-client-img">
                <img src="images/testimonials-client-02.jpg" class="img-responsive" alt="client-02">
              </div>
              <div class="testimonials-client-dtl">
                <h6 class="client-name">Noman Akram</h6>
                <div class="client-since">Platinum user from 7 months.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end testimonials -->


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
              <p>&copy; Copyrights 2022 <a href="index.html">Pak Auto service</a>. | All Rights Reserved.</p>
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