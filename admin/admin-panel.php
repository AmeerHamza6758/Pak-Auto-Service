<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['username']))
{
	$my_admin=$_SESSION['username'];
header('Location:../admin-login.php'); 
}

if(isset($_GET['del']))
{
$del_id=$_GET['del'];
$del_query="DELETE FROM `pas`.`bookacar` WHERE `bookacar`.`sr_no` = $del_id";	
if(mysqli_query($connection,$del_query))

{
echo "<script>alert('Booking Deleted'); </script>"; 
}
}

if(isset($_GET['dele']))
{
$del_id=$_GET['dele'];
$del_query="DELETE FROM `ascs`.`wash` WHERE `wash`.`sr_no` = $del_id";	
if(mysqli_query($connection,$del_query))

{
echo "<script>alert('Appointment Deleted'); </script>"; 
}
}


$querywash= mysqli_query($connection,"SELECT * FROM wash");
$countwash= mysqli_num_rows($querywash);


$querymechanic= mysqli_query($connection,"SELECT * FROM mechanicbooking");
$countmechanic= mysqli_num_rows($querymechanic);

$querycars= mysqli_query($connection,"SELECT * FROM bookacar");
$countcars= mysqli_num_rows($querycars);

$queryfeedback= mysqli_query($connection,"SELECT * FROM contactus");
$countfeedback= mysqli_num_rows($queryfeedback);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
               <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="admin-panel.php">
                   <h3>Wel come Admin</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="admin-panel.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li class="active">
						
                                                    <li>
                            <a href="washing_appointment.php">
                                <i class="fas fa-chart-bar"></i>Washing Appointments</a>
                        </li>
                        <li>
                            <a href="mechanic_appointment.php">
                                <i class="fas fa-table"></i>Mechanic Appointment</a>
                        </li>
                        <li>
                            <a href="car_booking.php">
                                <i class="far fa-check-square"></i>Car Bookings</a>
                        </li>
                        <li>
                            <a href="feedback.php">
                                <i class="fas fa-calendar-alt"></i>Feedbacks</a>
                        </li>
						
						<li>
                            <a href="logout.php">
                                <i class="fas fa-user"></i>Logout</a>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            



            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $countwash; ?></h2>
                                    <span class="desc">Washing Appointments</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $countmechanic; ?></h2>
                                    <span class="desc">Mechanic Appointment</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $countcars; ?></h2>
                                    <span class="desc">Car Bookings</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $countfeedback; ?></h2>
                                    <span class="desc">Feedbacks</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
</div>
           
        <!-- PAGE CONTAINER-->
        <div class="page-container">
                        
                        <div class="row m-t-30" style="padding-top:5%; padding-left:1%; padding-right:1%;">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>CINIC</th>
                                                <th>Car</th>
                                                <th>Model</th>
                                                <th>Colour</th>
                                                <th>Date</th>
												<th>Start Time</th>
												<th>Return Time</th>
												<th>Email</th>
											
												<th>Phone</th>
												<th>Reply</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
										<?php
$query="SELECT * FROM bookacar LIMIT 2";
$run=mysqli_query($connection,$query);
while($row = mysqli_fetch_array($run)){
$aid=$row['cinic'];
$aid1=$row['username'];
$aid2=$row['color'];
$aid3=$row['type'];
$aid4=$row['sr_no'];
$aid5=$row['model'];
$aid6=$row['date'];
$aid7=$row['start'];
$aid11=$row['end'];
$aid8=$row['email'];
$aid9=$row['phone'];
$aid10=$row['message'];
?> 
                                        <tbody>
                                             <td>
<?php echo $aid1; ?> 
   </td> 
   <td>
<?php echo $aid; ?>
   </td>
   <td>
   <?php echo $aid3; ?> 
   </td>
   
<td>
 <?php echo $aid5; ?>
   </td>
   <td>
 <?php echo $aid2; ?>
   </td>
   <td>
 <?php echo $aid6; ?>
   </td>
   <td>
 <?php echo $aid7; ?>
   </td>
   <td>
 <?php echo $aid11; ?>
   </td>
      <td>
 <?php echo $aid8; ?>
   </td>

      <td>
 <?php echo $aid9; ?>
   </td>
   
    <td>
 <a href="mailto: <?php echo $aid8; ?>"> <span class="fa fa-reply" ></span></a>
 </td>
 <td>
 <a href="admin-panel.php?del= <?php echo $aid4; ?>"> <span class="fa fa-times" ></span></a>
 </td>

   </tr>
   
   
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
 </div>                       </div>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
                        
                        <div class="row m-t-30" style="padding-top:5%; padding-left:1%; padding-right:1%;">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Service Type</th>
                                                <th>Car Type</th>
                                                <th>Date</th>
                                                <th>Time</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Message</th>
												<th>Reply</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
										<?php
$query="SELECT * FROM wash LIMIT 2";
$run=mysqli_query($connection,$query);
while($row = mysqli_fetch_array($run)){
$aid=$row['name'];
$aid1=$row['username'];
$aid2=$row['service'];
$aid3=$row['type'];
$aid4=$row['sr_no'];
$aid5=$row['number'];
$aid6=$row['date'];
$aid7=$row['time'];
$aid8=$row['email'];
$aid9=$row['phone'];
$aid10=$row['message'];
?> 
                                        <tbody>
                                             <td>
<?php echo $aid; ?> 
   </td> 
   <td>
<?php echo $aid2; ?>
   </td>
   <td>
   <?php echo $aid3; ?> 
   </td>
   
<td>
 <?php echo $aid6; ?>
   </td>
   <td>
 <?php echo $aid7; ?>
   </td>
   <td>
 <?php echo $aid8; ?>
   </td>
   <td>
 <?php echo $aid9; ?>
   </td>
   <td>
 <?php echo $aid10; ?>
   </td>
   
    <td>
 <a href="mailto: <?php echo $aid8; ?>"> <span class="fa fa-reply" ></span></a>
 </td>
 <td>
 <a href="admin-panel.php?dele= <?php echo $aid4; ?>"> <span class="fa fa-times" ></span></a>
 </td>

   </tr>
   
   
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                         

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 ASCS. All rights reserved. Template by <a href="../index.php">ASCS</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->