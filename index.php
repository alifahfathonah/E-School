<?php
//ob_start();  // Standarad Ob Start
//ini_set("zlib.output_compression", "On"); // with no headers yet sent
if(!ob_start("ob_gzhandler")) ob_start(); // Try to Send Compress Data to Browser ob_gzhandler();
 

if (!isset($_SESSION)) {
  session_start();
}

require_once('Connections/conn.php');  // Get Connection String Details
require_once('system/libraries/globals_functions_inc.php');  // Get Global Funtions 
require_once('system/libraries/access_rights_check.php');  // Get User Access Rights Check

require_once('system/defined_constants/system_defualts.php');  // Get Global Funtions 
require_once('system/config/config.php');
require_once('system/defined_constants/message_box_constants_inc_en.php');  // Get Global Funtions 


 
// Load Requested Page from application/views 
if(isset($_GET['page_id']) && strlen($_GET['page_id'])>=2) {
	(substr($_GET['page_id'], -4)!='.php')?
	     $view_name=($_GET['page_id']). ".php":$view_name=($_GET['page_id']); // end of Ternary Operator
}// end of if page_id check
require_once("application/views/_default_tamplate.php"); // The request page id will be send to the defualt tamplat and will be shown.
ob_end_flush();
?>