<?php require_once("application/controllers/".basename( __FILE__ )); ?>
<h2> User Login </h2>
<div class="data_column_a">
    <div class="data_entry_view">
    <form name="frmLogin" id="frmLogin" action="?page_id=check_login" method="POST" accept-charset="utf-8">
    <fieldset>
    <legend> Login </legend>
    <label>Username </label>
    <input type="text" name="Username"  id="Username">
    <label>Password </label>
    <input type="password" name="Password" id="Passwrod">
    <label>  </label>
    <input type="submit" name="Submit" id="Login" value="Login">
    </fieldset>
    </form>
    </div>
</div>
