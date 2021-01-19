<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<style type="text/css">
.data_column_a .data_entry_view #form1 fieldset table {
	text-align: right;
}
</style>

<h2> Change User's Password </h2>
<div class="data_column_a">
    <div class="data_entry_view">
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" accept-charset="utf-8">
    <fieldset>
    <legend> Change User's Password </legend>
      <table width="198" height="141" align="center">
        <tr valign="baseline">
          <td>Username</td>
        </tr>
        <tr valign="baseline">
          <td>
            <input type="text" name="Username" value="" size="32" placeholder="Enter Username"  required="required"/></td>
        </tr>
        <tr valign="baseline">
          <td>New Password</td>
        </tr>
        <tr valign="baseline">
          <td><input type="password" name="Password" value="" size="32" placeholder="Enter New Password" required="required" /></td>
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