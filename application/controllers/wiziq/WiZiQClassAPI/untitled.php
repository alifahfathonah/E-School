<?php require_once('../../Connections/conn.php'); ?>
<?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO eschool_courses_classes (CourseID, TeacherUserID, WizIQ_class_id, WizIQ_start_time, WizIQ_presenter_email, WizIQ_duration, WizIQ_attendee_limit, WizIQ_presenter_default_controls, WizIQ_attendee_default_controls, WizIQ_create_recording, WizIQ_recording_url, WizIQ_return_url, WizIQ_status_ping_url, WizIQ_language_culture_name, CreateAt, WhoUserID) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['CourseID'], "int"),
                       GetSQLValueString($_POST['TeacherUserID'], "int"),
                       GetSQLValueString($_POST['WizIQ_class_id'], "text"),
                       GetSQLValueString($_POST['WizIQ_start_time'], "text"),
                       GetSQLValueString($_POST['WizIQ_presenter_email'], "text"),
                       GetSQLValueString($_POST['WizIQ_duration'], "int"),
                       GetSQLValueString($_POST['WizIQ_attendee_limit'], "int"),
                       GetSQLValueString($_POST['WizIQ_presenter_default_controls'], "text"),
                       GetSQLValueString($_POST['WizIQ_attendee_default_controls'], "text"),
                       GetSQLValueString($_POST['WizIQ_create_recording'], "text"),
                       GetSQLValueString($_POST['WizIQ_recording_url'], "text"),
                       GetSQLValueString($_POST['WizIQ_return_url'], "text"),
                       GetSQLValueString($_POST['WizIQ_status_ping_url'], "text"),
                       GetSQLValueString($_POST['WizIQ_language_culture_name'], "text"),
                       GetSQLValueString($_POST['CreateAt'], "date"),
                       GetSQLValueString($_POST['WhoUserID'], "int"));

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CourseID:</td>
      <td><input type="text" name="CourseID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TeacherUserID:</td>
      <td><input type="text" name="TeacherUserID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_class_id:</td>
      <td><input type="text" name="WizIQ_class_id" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_start_time:</td>
      <td><input type="text" name="WizIQ_start_time" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_presenter_email:</td>
      <td><input type="text" name="WizIQ_presenter_email" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_duration:</td>
      <td><input type="text" name="WizIQ_duration" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_attendee_limit:</td>
      <td><input type="text" name="WizIQ_attendee_limit" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_presenter_default_controls:</td>
      <td><input type="text" name="WizIQ_presenter_default_controls" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_attendee_default_controls:</td>
      <td><input type="text" name="WizIQ_attendee_default_controls" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_create_recording:</td>
      <td><input type="text" name="WizIQ_create_recording" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_recording_url:</td>
      <td><input type="text" name="WizIQ_recording_url" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_return_url:</td>
      <td><input type="text" name="WizIQ_return_url" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_status_ping_url:</td>
      <td><input type="text" name="WizIQ_status_ping_url" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WizIQ_language_culture_name:</td>
      <td><input type="text" name="WizIQ_language_culture_name" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CreateAt:</td>
      <td><input type="text" name="CreateAt" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WhoUserID:</td>
      <td><input type="text" name="WhoUserID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>