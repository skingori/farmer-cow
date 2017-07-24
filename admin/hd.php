<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 01/04/2017
 * Time: 11:24
 */
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['logname']) && isset($_SESSION['rank'])) {
    switch($_SESSION['rank']) {

        case 2:
            header('location:../user/index.php');//redirect to  page
            break;

    }
}elseif(!isset($_SESSION['logname']) && !isset($_SESSION['rank'])) {
    header('Location:../sessions.php');
}
else
{

    header('Location:index.php');
}
include '../connection/db.php';
$username=$_SESSION['logname'];

$result1 = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_Username='$username'");

while($res = mysqli_fetch_array($result1))
{
    $username= $res['Login_Username'];
    $id= $res['Login_Id'];

}


$result1 = mysqli_query($con, "SELECT * FROM Farmer_table WHERE Farmer_Id='$id'");

while($res = mysqli_fetch_array($result1))
{
    $email=$res['Farmer_Email'];

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin | Home</title>
    <!-- Favicon-->
    <link rel="icon" href="../images/cowb.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!--font awesome -->
    <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet" media="all">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.min.css" rel="stylesheet" />
</head>

<body class="theme-lime">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php">MILK PRODUCTION MONITOR</a>
            <!--<img src="images/c.png" width="" height="39">-->
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->

                <!-- #END# Notifications -->
                <!-- Tasks -->

                <!-- #END# Tasks -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#1B5E20 ; font-family:'Abadi MT Condensed Extra Bold'"><?php echo $username; ?> </div>
                <div class="email" style="color:#00E676 ;font-family:Consolas"><?php echo $email ;?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color: #0f0f0f">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">vpn_key</i>Password</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="../logout.php?logout"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="index.php">
                        <i class="material-icons">home</i>
                        <span>Homepage</span>
                    </a>
                </li>



                <li class="">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">note_add</i>
                        <span>New Entry</span>
                    </a>
                    <ul class="ml-menu">

                        <li>
                            <a href="add-cow.php"><i class="fa fa-plus-circle"> Animal</i></a>
                        </li>

                        <li>
                            <a href="add-feeds.php"><i class="fa fa-plus-circle"> Feeds</i></a>
                        </li>

                        <li>
                            <a href="add-milk.php"><i class="fa fa-plus-circle"> Monitor milk</i></a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">mode_edit</i>
                        <span>Next Entry</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="assign.php"><i class="fa fa-link"> Assign to Animal</i></a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Get Reports</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="all-cows.php"><i class="fa fa-file"> All Cows</i></a>
                        </li>
                        <li>
                            <a href="milk_cost.php"><i class="fa fa-file"> Milk Production</i></a>
                        </li>
                        <li>
                            <a href="feeding_cost.php"><i class="fa fa-file"> Feeding</i></a>
                        </li>
                    </ul>
					
					
                </li>

                <li class="header">DEFAULT SETTINGS</li>
                <li class="active">
                    <a href="">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>

                <li>
                    <a href="help.php">
                        <i class="material-icons">help</i>
                        <span>Get Help</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017 Powered by <a href="">farmlink co </a>
            </div>
            <!--<div class="version">
                <b>Version: </b> 1.0.4
            </div>-->
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->


    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <header>
            <button class="btn btn-circle"><i class="fa fa-print" href="" onclick="printData()"></i> </button>
        </header>
