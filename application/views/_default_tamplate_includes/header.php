<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8">
<title>Welcome to E-School</title>

<script src="scripts/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui.js"></script>
<!--[if lt IE 9]>
<script src="scripts/html5shiv.js"></script>
<![endif]-->
<!--  Nivo Image Slider -->
<link href="styles/zorkif_fluid_grids.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="scripts/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="scripts/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<!-- End of Image Slider -->

</head>
<body>
    <div id="error_message">
        Error Occured.
    </div><!-- end of error_message -->
    
    <div id="warning_message">
        Warning!. Make sure you perform the correct action.
    </div><!-- End of warning_message -->
    
    <div id="notification_message">
        The Action has been completed Successfully.
    </div><!-- End of notification_message -->
<div class="zorkif_drop_down_menu">
  <?php 
	require_once("application/views/cpanel_session_menu_en.php");
 ?>
</div> <!-- end of zorkif_drop_down_menu -->
	<div class="main_container">
	 <div id="header"> 
               <ul class="nav">
                    <li class="home">
                    <a href="index.php">Home</a>
                    </li>
                    <li class="software selected">
                    <a href="index.php?page_id=check_login">Login</a>
                    </li>
                    <li class="support">
                    <a href="?page_id=support">Support</a>
                    </li>
                    <li class="services">
                    <a href="?page_id=our_services">Services</a>
                    </li>
                    <li class="company">
                    <a href="?page_id=our_company">Company</a>
                    </li>
                </ul>                                                  
                
 				
                <div id="header_top_logo">
                <img src="images/header_top_nav/e_school_logo.png" width="150" height="65">
                </div><!-- End of header_top_logo -->

            </div><!-- End of header -->