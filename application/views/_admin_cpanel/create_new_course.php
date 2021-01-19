<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<div class="data_entry_view">
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" accept-charset="utf-8">
    <fieldset>
      <legend>Add New Course</legend>
      <table width="100%" align="center">
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">Subject Name</td>
          <td>TeacherLibID:</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><select name="SubjectID">
            <?php 
do {  
?>
            <option value="<?php echo $row_RsSubjects['SubjectID']?>" ><?php echo $row_RsSubjects['SubjectTitle']?></option>
            <?php
} while ($row_RsSubjects = mysql_fetch_assoc($RsSubjects));
?>
          </select></td>
          <td><select name="TeacherLibID">
            <?php 
do {  
?>
            <option value="<?php echo $row_RsTeacherLibrary['TeacherLibID']?>" ><?php echo $row_RsTeacherLibrary['LibName']?></option>
            <?php
} while ($row_RsTeacherLibrary = mysql_fetch_assoc($RsTeacherLibrary));
?>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">CourseName:</td>
          <td>Description:</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><input type="text" name="CourseName" value="" size="32" /></td>
          <td><input type="text" name="Description" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">StartDate:</td>
          <td>EndDate:</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><input type="text" name="StartDate" value="" size="32" /></td>
          <td><input type="text" name="EndDate" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">ContentDataFileName:</td>
          <td>CourseFee:</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><input type="text" name="ContentDataFileName" value="" size="32" /></td>
          <td><input type="text" name="CourseFee" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">MaxNoOfStudent:</td>
          <td>TotalNoOfClasses:</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><input type="text" name="MaxNoOfStudent" value="" size="32" /></td>
          <td><input type="text" name="TotalNoOfClasses" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><input type="checkbox" name="IsEnrollable" value="" checked="checked" />
            Is Enrollable?</td>
          <td>&nbsp;</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><input name="btnSave" type="submit" id="btnSave" value="Save Course" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </fieldset>
  </form>
</div>
<p>&nbsp;</p>

<?php
@mysql_free_result($RsSubjects);

@mysql_free_result($RsTeacherLibrary);
?>
