<?php require_once("application/controllers/".basename( __FILE__ )); ?>
<h2> User Account Profile </h2>
<div class="data_entry_view">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right"><strong>First Name:</strong></td>
      <td><strong>Address Line1:</strong></td>
      <td>&nbsp;&nbsp;&nbsp;</td>
      <td>Picture:</td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['FirstName'], ENT_COMPAT, ''); ?></td>
      <td><?php echo htmlentities($row_Rs_GetUserProfile['AddressLine1'], ENT_COMPAT, ''); ?></td>
      <td rowspan="13">&nbsp;</td>
      <td rowspan="13"><img src="<?php echo USER_PROFILE_UPLOAD_PATH.htmlentities($row_Rs_GetUserProfile['Picture']); ?>" width="200" height="198" /></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><strong>Middle Names:</strong></td>
      <td><strong>Address Line2:</strong></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['MiddleNames'], ENT_COMPAT, ''); ?></td>
      <td><?php echo htmlentities($row_Rs_GetUserProfile['AddressLine2'], ENT_COMPAT, ''); ?></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><strong>Last Names:</strong></td>
      <td><strong>City:</strong></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['LastNames'], ENT_COMPAT, ''); ?></td>
      <td><?php echo htmlentities($row_Rs_GetUserProfile['City'], ENT_COMPAT, ''); ?></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><strong>Email:</strong></td>
      <td><strong>Country:</strong></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['Email'], ENT_COMPAT, ''); ?></td>
      <td><?php echo $row_Rs_GetCountryName['CountryName']?></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><strong>ContactNo:</strong></td>
      <td><strong>Company <em>optional</em></strong></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['ContactNo'], ENT_COMPAT, ''); ?></td>
      <td><?php echo htmlentities($row_Rs_GetUserProfile['CompanyNameIfAny'], ENT_COMPAT, ''); ?></td>
      </tr>
    <tr valign="baseline">
      <td nowrap align="right"><strong>WebSite:</strong></td>
      <td><strong>Others:</strong></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['WebSite'], ENT_COMPAT, ''); ?></td>
      <td><?php echo htmlentities($row_Rs_GetUserProfile['Others'], ENT_COMPAT, ''); ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><strong>Phone:</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right"><?php echo htmlentities($row_Rs_GetUserProfile['Phone'], ENT_COMPAT, ''); ?></td>
      <td>&nbsp;</td>
    </tr>
  </table>



</div>


<?php
@mysql_free_result($Rs_GetUserProfile);
?>