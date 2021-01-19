<?php require_once("application/controllers/".basename( __FILE__ )); ?>
<h2> User Account Profile </h2>
<div class="data_entry_view">

<form method="post" name="form1" action="<?php echo $editFormAction; ?>" accept-charset="utf-8" enctype="multipart/form-data">
<fieldset>
<legend>User Profile </legend>
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">First Name:</td>
      <td>Address Line1:</td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="text" name="FirstName" value="<?php echo htmlentities($row_Rs_GetUserProfile['FirstName'], ENT_COMPAT, ''); ?>" size="32" tabindex="1" required="required" /></td>
      <td><input type="text" name="AddressLine1" value="<?php echo htmlentities($row_Rs_GetUserProfile['AddressLine1'], ENT_COMPAT, ''); ?>" size="32"  tabindex="8" required="required" /></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right">Middle Names:</td>
      <td>Address Line2:</td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="text" name="MiddleNames" value="<?php echo htmlentities($row_Rs_GetUserProfile['MiddleNames'], ENT_COMPAT, ''); ?>" size="32"  tabindex="2" /></td>
      <td><input type="text" name="AddressLine2" value="<?php echo htmlentities($row_Rs_GetUserProfile['AddressLine2'], ENT_COMPAT, ''); ?>" size="32"  tabindex="9"  /></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right">Last Names:</td>
      <td>City:</td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="text" name="LastNames" value="<?php echo htmlentities($row_Rs_GetUserProfile['LastNames'], ENT_COMPAT, ''); ?>" size="32"  tabindex="3"  required="required" /></td>
      <td><input type="text" name="City" value="<?php echo htmlentities($row_Rs_GetUserProfile['City'], ENT_COMPAT, ''); ?>" size="32" tabindex="10"  required="required"  /></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td>Country:</td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="email" name="Email" value="<?php echo htmlentities($row_Rs_GetUserProfile['Email'], ENT_COMPAT, ''); ?>" size="32"  tabindex="4"  required="required" /></td>
      <td><select name="CountryID" tabindex="11">
        <?php 
do {  
?>
        <option value="<?php echo $row_Rs_GetCountryName['CountryID']?>" <?php if (!(strcmp($row_Rs_GetCountryName['CountryID'],  htmlentities($row_Rs_GetUserProfile['CountryID'], ENT_COMPAT, '')))) {echo "SELECTED";} ?>><?php echo $row_Rs_GetCountryName['CountryName']?></option>
        <?php
} while ($row_Rs_GetCountryName = mysql_fetch_assoc($Rs_GetCountryName));
?>
      </select></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right">ContactNo:</td>
      <td>Company <em>optional</em></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="text" name="ContactNo" value="<?php echo htmlentities($row_Rs_GetUserProfile['ContactNo'], ENT_COMPAT, ''); ?>" size="32"  tabindex="5"  /></td>
      <td><input type="text" name="CompanyNameIfAny" value="<?php echo htmlentities($row_Rs_GetUserProfile['CompanyNameIfAny'], ENT_COMPAT, ''); ?>" size="32"  tabindex="12" /></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right">WebSite:</td>
      <td>Others:</td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="url" name="WebSite" value="<?php echo htmlentities($row_Rs_GetUserProfile['WebSite'], ENT_COMPAT, ''); ?>" size="32"  tabindex="6" pattern="https?://.+"/></td>
      <td><input type="text" name="Others" value="<?php echo htmlentities($row_Rs_GetUserProfile['Others'], ENT_COMPAT, ''); ?>" size="32"  tabindex="13" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Phone:</td>
      <td>Picture:</td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><input type="text" name="Phone" value="<?php echo htmlentities($row_Rs_GetUserProfile['Phone'], ENT_COMPAT, ''); ?>" size="32"  tabindex="7"  /></td>
      <td><input type="file" name="Picture" value="<?php echo htmlentities($row_Rs_GetUserProfile['Picture'], ENT_COMPAT, ''); ?>" size="32"  tabindex="14" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input name="btnSave" type="submit" id="btnSave" value="Save Change"  tabindex="15" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="UserID" value="<?php echo $row_Rs_GetUserProfile['UserID']; ?>">
</fieldset>
</form>
<p>&nbsp;</p>

</div>
<p>&nbsp;</p>

<?php
@mysql_free_result($Rs_GetUserProfile);
?>