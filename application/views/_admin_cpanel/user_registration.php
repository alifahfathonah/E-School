<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<h2> Create new user account </h2>
<div class="data_entry_view">
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" accept-charset="utf-8">
  <fieldset>
  <legend> User Accounts </legend>
    <table align="center">
      <tr valign="baseline">
        <td>Username:</td>
        <td>Password:</td>
        
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="Username" value="" size="32" tabindex="1"  required="required" /></td>
        <td><input type="text" name="Password" value="" size="32" tabindex="2"  required="required" /></td>
      </tr>
      
      <tr valign="baseline">
        <td>FirstName:</td>
        <td>MiddleNames:</td>
        <td>LastNames:</td>
        <td>WebSite:</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="FirstName" value="" size="32" tabindex="3" required="required" /></td>
        <td><input type="text" name="MiddleNames" value="" size="32" tabindex="4"/></td>
         <td><input type="text" name="LastNames" value="" size="32" tabindex="5" required="required" /></td>
        <td><input type="url" name="WebSite" value="" size="32" tabindex="13"/></td>
      </tr>
      
      <tr valign="baseline">
        <td>Phone:</td>
        <td>Email:</td>
         <td>Company <em>optional<em></td>
         <td>ContactNo:</td>
      </tr>
      <tr valign="baseline">
       
         <td><input type="text" name="Phone" value="" size="32" tabindex="11"  required="required" /></td>
        <td><input type="email" name="Email" value="" size="32" tabindex="12"  required="required" /></td>
        <td><input type="text" name="CompanyNameIfAny" value="" size="32" tabindex="14"/></td>
         <td><input type="text" name="ContactNo" value="" size="32" tabindex="15" /></td>
        
      </tr>
 
      <tr valign="baseline">
        <td>Country:</td>
      <td>City:</td>
        <td>AddressLine1:</td>
        <td>AddressLine2:</td>
       
      </tr>
      <tr valign="baseline">
      <td nowrap="nowrap"><select name="CountryID" tabindex="9">
          <?php 
do {  
?>
    
          
            <option value="<?php echo $row_Rs_CountryNames['CountryID']?>" <?php if (!(strcmp( $row_Rs_CountryNames['CountryID'],  htmlentities("191", ENT_COMPAT, '')))) {echo "SELECTED";} ?>><?php echo $row_Rs_CountryNames['CountryName']?></option>
          
          <?php
} while ($row_Rs_CountryNames = mysql_fetch_assoc($Rs_CountryNames));
?>
        </select></td>
      <td><input type="text" name="City" value="" size="32" tabindex="8" required="required" /></td>
        <td><input type="text" name="AddressLine1" value="" size="32" tabindex="6" required="required" /></td>
        
        <td><input type="text" name="AddressLine2" value="" size="32" tabindex="7"/></td>
        
      </tr>
      <tr valign="baseline">
        
        
      </tr>
      <tr valign="baseline">
        
      </tr>
      <tr valign="baseline">
         <td>Others:</td>
        <td>Group:</td>
        <td>AdditionalUsername:</td>
          <td>AdditionalPassword</td>
      </tr>
      <tr valign="baseline">
        <td><input type="text" name="Others" value="" size="32" tabindex="16"/></td>
        <td><select name="GroupID" tabindex="17">
          <?php 
do {  
?>
          <option value="<?php echo $row_Rs_Groups['GroupID']?>" ><?php echo $row_Rs_Groups['GroupName']?></option>
          <?php
} while ($row_Rs_Groups = mysql_fetch_assoc($Rs_Groups));
?>
        </select></td>
        <td><input type="text" name="AdditionalUsername" value="" size="32" tabindex="18"/></td>
         <td><input type="text" name="AdditionalPassword" value="" size="32" tabindex="19"/></td>
      </tr>
      <tr valign="baseline">
      
      
      </tr>
      <tr valign="baseline">
        
       
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap">AccountStatus:</td>
        <td>&nbsp;</td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap"><select name="AccountStatus" tabindex="10">
          <option value="1" <?php if (!(strcmp(1, 1))) {echo "SELECTED";} ?>>Activated</option>
          <option value="2" <?php if (!(strcmp(2, 1))) {echo "SELECTED";} ?>>Deactivated</option>
        </select></td>
        <td><input type="submit" value="Create User Account" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1" />
    </fieldset>
  </form>
</div>
<p>&nbsp;</p>
<?php
mysql_free_result($Rs_Groups);

mysql_free_result($Rs_CountryNames);
?>
