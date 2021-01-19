<?php
allow_access_to_admins_only();
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frmAddThisStudentToCourse")) {
	
	if(!empty($_POST['UserID'])) {
		foreach($_POST['UserID'] as $checkUserID) {
	
	
	  $insertSQL = sprintf("INSERT INTO  eschool_courses_studdent_entrollments (
	`CourseID` ,
	`StudentUserID` ,
	`WhoUserID` ,
	`CreateAt`) VALUES (%s,%s,%s,%s)",
	   GetSQLValueString(isset($_POST['CourseID']) ? "true" : "", "defined","1","0"),
	   GetSQLValueString(isset($checkUserID) ? "true" : "", "defined","1","0"),
	   GetSQLValueString($_SESSION['MM_UserID'],"int"),
	   GetSQLValueString(date("Y-m-d H:i:s"), "date"));
	
	  mysql_select_db($database_conn, $conn);
	  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());
	
		}// end pof foreach
	}//end of Empty Check
	
	  $insertGoTo = "index.php?page_id=_teacher_cpanel/enrolled_student_list";
	/*   if (isset($_SERVER['QUERY_STRING'])) {
		$insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
		$insertGoTo .= $_SERVER['QUERY_STRING'];
	  } */
	 // header(sprintf("Location: %s", $insertGoTo));
}// end of frmAddThisStudentToCourse

$maxRows_RsGetStudentDetails = 10;
$pageNum_RsGetStudentDetails = 0;
if (isset($_GET['pageNum_RsGetStudentDetails'])) {
  $pageNum_RsGetStudentDetails = $_GET['pageNum_RsGetStudentDetails'];
}
$startRow_RsGetStudentDetails = $pageNum_RsGetStudentDetails * $maxRows_RsGetStudentDetails;

mysql_select_db($database_conn, $conn);
$query_RsGetStudentDetails = "SELECT * FROM user_accounts WHERE GroupID = 3 AND user_accounts.AccountStatus=1 ORDER BY Username ASC";
$query_limit_RsGetStudentDetails = sprintf("%s LIMIT %d, %d", $query_RsGetStudentDetails, $startRow_RsGetStudentDetails, $maxRows_RsGetStudentDetails);
$RsGetStudentDetails = mysql_query($query_limit_RsGetStudentDetails, $conn) or die(mysql_error());
$row_RsGetStudentDetails = mysql_fetch_assoc($RsGetStudentDetails);

if (isset($_GET['totalRows_RsGetStudentDetails'])) {
  $totalRows_RsGetStudentDetails = $_GET['totalRows_RsGetStudentDetails'];
} else {
  $all_RsGetStudentDetails = mysql_query($query_RsGetStudentDetails);
  $totalRows_RsGetStudentDetails = mysql_num_rows($all_RsGetStudentDetails);
}
$totalPages_RsGetStudentDetails = ceil($totalRows_RsGetStudentDetails/$maxRows_RsGetStudentDetails)-1;

$queryString_RsGetStudentDetails = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_RsGetStudentDetails") == false && 
        stristr($param, "totalRows_RsGetStudentDetails") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_RsGetStudentDetails = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_RsGetStudentDetails = sprintf("&totalRows_RsGetStudentDetails=%d%s", $totalRows_RsGetStudentDetails, $queryString_RsGetStudentDetails);
?>