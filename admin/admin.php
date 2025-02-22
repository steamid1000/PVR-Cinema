<?php

require_once '../db_scripts/login.php';
require '../db_scripts/earnings.php';


session_start();

if (!isset($_SESSION['username'])) {
    session_destroy();
    Redirect('login.php',true);
    // exit;
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="PVR Cinema">
    <meta name="robots" content="noindex,nofollow">
    <title>Movie Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png"> -->
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin1">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon
                        <b class="logo-icon">
                            Dark Logo icon 
                            <img src="../MovieImages/logo.png" width="30px" alt="homepage" />
                        </b>
                        End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <em style="color:blue; font-size:1.9rem; ">PVR CINEMA</em>
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin2">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/barbie.jpg" alt="user-img" width="45" 
                                class="img-circle"><span class="text-black font-medium">Admin</span></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php"
                                aria-expanded="false">
                                <i class="fa fa-server" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adminfrm.php" aria-expanded="false">
                                <i class="fa fa-film" aria-hidden="true"></i>
                                <span class="hide-menu">Add Movies</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="movie_table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Movie Details</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="user_table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Booked Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="changepassword.php"
                                aria-expanded="false">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <span class="hide-menu">Change Password</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h3 class="panel-title">Theater Activities</h3>  
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="login.php"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">

                <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-12"> 
                         <div class="white-box analytics-info">
                            <h3 class="box-title">Total Movies</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-blue">
                                        <?php echo $movies; ?>
                                    </span></li>
                            </ul>
                        </div> 
                     </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Earnings Rs</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">
                                        <?php echo $total_earnings; ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">

                            <form action="" method="get">
                                <div class="d-md-flex mb-3">
                                    <h3 class="box-title mb-0">Check Tables</h3>
                                    <input class="col-md-3 col-sm-4 col-xs-6 ms-auto" type="date" id="start" name="day"
                                        value="">
                                    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                        <select name="route" id="locations"
                                        class="form-select shadow-none row border-top">
                                            <option value=""> Choose Movies here</option>                                             
                                            <?php
                                            $query = "select * from `movies`"; //fetching the available routes from the db
                                            $result = mysqli_query($conn, $query);
                                            
                                            $route = $result->fetch_all();
                                             foreach ($route as $key => $value) {
                                            ?>   
                                                <option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
                                                <?php
                                            } ?>
                                        </select>
                                    </div>
                                    <button type="submit" id="selectedDat"
                                        class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Search</button>
                                </div>
                            </form>
                                  
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Booking_ID</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Booking_seats</th>
                                            <th class="border-top-0">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="an">
                                        <?php

                                            if (isset($_GET['route']) and isset($_GET['day'])) {
                                            $date = $_GET['day'];
                                            $movie = $_GET['route'];
                                            // Execute the SQL query and fetch the result  
                                            if ($sql = $conn->query("SELECT * FROM `bookings` WHERE dates='$date' and movie_id=$movie;")) {
                                                
                                                while ($rows = mysqli_fetch_assoc($sql)) {
                                                    ?>
                                                    
                                                    <tr>
                                                        <td>
                                                            <?php echo $rows['booking_id']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $rows['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $rows['booked_seats']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $rows['amount']; ?>
                                                        </td>
                                                    </tr>

                                                    <?php

                                                }
                                            }
                                            }
                                        else{
                                            echo "<h1> No Data found on the particular date</h1>";
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer text-center"> 2023 © Admin Panel <a
                href="https://www.pvrcinemas.com/">pvrcinemas.com</a>
        </footer>
            </div>

        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <script src="queries.js"></script>
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/app-style-switcher.js"></script>
        <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.js"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
        <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="js/pages/dashboards/dashboard1.js"></script>
        <script>
            document.getElementById('start').valueAsDate = new Date();
        </script>
       <script>
  function printTable() {
    // Create a new window for printing
    var printWindow = window.open('', '_blank');

    // Set the HTML content of the print window
    printWindow.document.open();
    printWindow.document.write(receiptHTML);
    printWindow.document.close();

    // Call the print function of the print window
    printWindow.print();
  }
</script>

<style>
  .button {
    background-color: red;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 17px;
    padding: 10px 30px;
    text-decoration: none;
    margin-top: 20px;
    display: inline-block;
    float: right;
    right: 20px;
    bottom: 20px;
    z-index: 999;
    cursor: pointer;
  }

  .button:hover {
    background-color:black;
  }
</style>

</body>


</html>