<?php require_once("application/controllers/".basename( __FILE__ )); ?>
<h2> Chnage Password </h2>
<div class="data_column_a">
    <div class="data_entry_view">
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" accept-charset="utf-8">
    <fieldset>
    <legend> Change  Password </legend>
      <table align="center">
        <tr valign="baseline">
          <td>New Password</td>
        </tr>
        <tr valign="baseline">
          <td><input type="password" name="Password" value="" size="32" placeholder="Enter New Password" required="required" /></td>
        </tr>
        <tr valign="baseline">
          <td>Confirm New Password</td>
        </tr>
        <tr valign="baseline">
          <td><label for="ConfirmPassword"></label>
            <input type="password" name="ConfirmPassword" id="ConfirmPassword"  required="required"></td>
        </tr>
        <tr valign="baseline">
          <td><input type="submit" value="Change Password" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_update" value="form1" />
     </fieldset>
    </form>
    </div>
</div>