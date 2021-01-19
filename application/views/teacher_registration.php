<?php require_once("application/controllers/".basename( __FILE__ )); ?>
<h2> Teacher Account Registration </h2>
<div class="data_entry_view">
  <form method="post" name="form1" action="<?php echo $editFormAction; ?>" accept-charset="utf-8">
  <fieldset><legend>Teacher Account Registration</legend>
    <table width="100%" align="center">
      <tr valign="baseline">
        <td>Username:</td>
        <td>Address Line 1:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="Username" value="" size="32" tabindex="1" autofocus required="required"></td>
        <td><input type="text" name="AddressLine1" value="" size="32" tabindex="8" required="required"></td>
      </tr>
      <tr valign="baseline">
        <td>Password:</td>
        <td>Address Line 2:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="password" name="Password" value="" size="32" tabindex="2" required="required"></td>
        <td><input type="text" name="AddressLine2" value="" size="32" tabindex="9" required="required"></td>
      </tr>
      <tr valign="baseline">
        <td>First Name:</td>
        <td>City:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="FirstName" value="" size="32" tabindex="3" required="required"></td>
        <td><input type="text" name="City" value="" size="32" tabindex="10" required="required"></td>
      </tr>
      <tr valign="baseline">
        <td>Middle Names:</td>
        <td>Country:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="MiddleNames" value="" size="32" tabindex="4"></td>
        <td><select name="CountryID" tabindex="11">
          <?php 
do {  
?>
          <option value="<?php echo $row_Rs_GetCountryName['CountryID']?>"<?php if (!(strcmp($row_Rs_GetCountryName['CountryID'], "191"))) {echo "SELECTED";} ?> ><?php echo $row_Rs_GetCountryName['CountryName']?></option>
          <?php
} while ($row_Rs_GetCountryName = mysql_fetch_assoc($Rs_GetCountryName));
?>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td>Last Names:</td>
        <td>Phone:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="LastNames" value="" size="32" tabindex="5" required="required"></td>
        <td><input type="text" name="Phone" value="" size="32" tabindex="12" required="required"></td>
      </tr>
      <tr valign="baseline">
        <td>Email:</td>
        <td>Web Site:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="email" name="Email" value="" size="32" tabindex="6" required="required"></td>
        <td><input type="text" name="WebSite" value="" size="32" tabindex="13"></td>
      </tr>
      <tr valign="baseline">
        <td>Contact No:</td>
        <td>&nbsp;</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="ContactNo" value="" size="32" tabindex="7"></td>
        <td><input name="btnSubmitCreateStudentAccount" type="submit" id="btnSubmitCreateStudentAccount" value="Create Account" tabindex="14"></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
</div>
<p>&nbsp;</p>

 
<?php
@mysql_free_result($Rs_GetCountryName);

@mysql_free_result($Rs_IsAllreadyRegistred);
?>
