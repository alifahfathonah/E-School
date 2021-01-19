<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<h2> Update Course Details </h2>
<div class="data_entry_view">
  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <fieldset>
  <legend> Update Course Details </legend>
    <table width="100%" align="center">
      <tr valign="baseline">
        <td width="33%" nowrap>CourseName:</td>
        <td width="33%">Description:</td>
        <td width="34%">TeacherUserID</td>
      </tr>
      <tr valign="baseline">
        <td nowrap><input type="text" name="CourseName" value="<?php echo htmlentities($row_RSGetCourseForEdit['CourseName'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><input type="text" name="Description" value="<?php echo htmlentities($row_RSGetCourseForEdit['Description'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><select name="TeacherUserID">
          <?php 
do {  
?>
          <option value="<?php echo $row_RsGetTeacherUserID['UserID']?>" <?php if (!(strcmp($row_RsGetTeacherUserID['UserID'], htmlentities($row_RSGetCourseForEdit['TeacherUserID'], ENT_COMPAT, '')))) {echo "SELECTED";} ?>><?php echo $row_RsGetTeacherUserID['Username']?></option>
          <?php
} while ($row_RsGetTeacherUserID = mysql_fetch_assoc($RsGetTeacherUserID));
?>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap>StartDate:</td>
        <td>EndDate:</td>
        <td>TeacherLibID:</td>
      </tr>
      <tr valign="baseline">
        <td nowrap><input type="text" name="StartDate" id="StartDate" value="<?php echo htmlentities($row_RSGetCourseForEdit['StartDate'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><input type="text" name="EndDate" id="EndDate" value="<?php echo htmlentities($row_RSGetCourseForEdit['EndDate'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><select name="TeacherLibID">
          <?php 
do {  
?>
          <option value="<?php echo $row_RsGetTeacherLibraryID['TeacherLibID']?>" <?php if (!(strcmp($row_RsGetTeacherLibraryID['TeacherLibID'], htmlentities($row_RSGetCourseForEdit['TeacherLibID'], ENT_COMPAT, '')))) {echo "SELECTED";} ?>><?php echo $row_RsGetTeacherLibraryID['LibName']?></option>
          <?php
} while ($row_RsGetTeacherLibraryID = mysql_fetch_assoc($RsGetTeacherLibraryID));
?>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap>MaxNoOfStudent:</td>
        <td>TotalNoOfClasses:</td>
        <td>SubjectID:</td>
      </tr>
      <tr valign="baseline">
        <td nowrap><input type="text" name="MaxNoOfStudent" value="<?php echo htmlentities($row_RSGetCourseForEdit['MaxNoOfStudent'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><input type="text" name="TotalNoOfClasses" value="<?php echo htmlentities($row_RSGetCourseForEdit['TotalNoOfClasses'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><select name="SubjectID">
          <?php 
do {  
?>
          <option value="<?php echo $row_RsGetSubjectsID['SubjectID']?>" <?php if (!(strcmp($row_RsGetSubjectsID['SubjectID'], htmlentities($row_RSGetCourseForEdit['SubjectID'], ENT_COMPAT, '')))) {echo "SELECTED";} ?>><?php echo $row_RsGetSubjectsID['SubjectTitle']?></option>
          <?php
} while ($row_RsGetSubjectsID = mysql_fetch_assoc($RsGetSubjectsID));
?>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap>CourseFee:</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr valign="baseline">
        <td nowrap><input type="text" name="CourseFee" value="<?php echo htmlentities($row_RSGetCourseForEdit['CourseFee'], ENT_COMPAT, ''); ?>" size="32"></td>
        <td><input type="checkbox" name="IsEnrollable" value=""  <?php if (!(strcmp(htmlentities($row_RSGetCourseForEdit['IsEnrollable'], ENT_COMPAT, ''),"1"))) {echo "checked=\"checked\"";} ?> />
IsEnrollable:</td>
        <td><input name="btnSave" type="submit" id="btnSave" value="Save Changes" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="CourseID" value="<?php echo $row_RSGetCourseForEdit['CourseID']; ?>">
  </fieldset>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  


<form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form2" id="form2">
  <fieldset>
    <legend> Upload New Content File </legend>
  <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td><input type="file" name="ContentDataFileName" value="<?php echo htmlentities($row_RSGetCourseForEdit['ContentDataFileName'], ENT_COMPAT, ''); ?>" size="32"><em class="small">* If you want to update the Content File, Please re upload it here </em></td>
  </tr>
    <tr>
    <td> 
    <input name="btnUpload" type="submit" id="btnUpload" value="Upload New Content File" />
    </td>
  </tr>
</table>  
      <input type="hidden" name="MM_update" value="form2">
      <input type="hidden" name="CourseID" value="<?php echo $row_RSGetCourseForEdit['CourseID']; ?>">
  </fieldset>
  </form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

<?php
@mysql_free_result($RsGetSubjectsID);

@mysql_free_result($RsGetTeacherUserID);

@mysql_free_result($RsGetTeacherLibraryID);

@mysql_free_result($RSGetCourseForEdit);
?>

<script type="text/javascript">
    $(function() {
        $( "#StartDate" ).datepicker({ dateFormat: 'yy-mm-dd' });
		$( "#EndDate" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>