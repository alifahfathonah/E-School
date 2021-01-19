<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<h2> Add new library for a teacher </h2>
<div class="data_entry_view">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" accept-charset="utf-8">
  <fieldset>
  <legend> Creat your Library </legend>
  <table align="center">
    <tr valign="baseline">
      <td>Library Name</td>
      <td>Select Teacher ID to Create Library for Him</td>
       <td>Description</td>
    </tr>
    <tr valign="baseline">
      <td><input type="text" name="LibName" value="" size="32" required="required"  /></td>
       <td><label for="TeacherID"></label>
        <select name="TeacherID" id="TeacherID">
          <?php
do {  
?>
          <option value="<?php echo $row_RsGetTeachersList['UserID']?>"><?php echo $row_RsGetTeachersList['Username']. " - ".$row_RsGetTeachersList['FirstName']." ".$row_RsGetTeachersList['LastNames']." "; ?> </option>
          <?php
} while ($row_RsGetTeachersList = mysql_fetch_assoc($RsGetTeachersList));
  $rows = mysql_num_rows($RsGetTeachersList);
  if($rows > 0) {
      mysql_data_seek($RsGetTeachersList, 0);
	  $row_RsGetTeachersList = mysql_fetch_assoc($RsGetTeachersList);
  }
?>
        </select></td>
         <td><textarea name="LibDescription" cols="60" rows="5" required="required" > </textarea></td>
         <td><input type="submit" value="Create New Library" /></td>
    </tr>
    <?php
	if(isset($_SESSION['MM_UserID']) && $_SESSION['MM_UserGroup']==1){	
	?>
    <tr valign="baseline">
      
    </tr>
    <tr valign="baseline">
     
    </tr>
    <?php
	}// end of Administrator's Group Check
	?>
    <tr valign="baseline">
     
    </tr>
    <tr valign="baseline">
     
    </tr>
    
    <tr valign="baseline">
      
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
  </fieldset>
</form>
<p>&nbsp;</p>

</div>
<?php
mysql_free_result($RsGetTeachersList);
?>
