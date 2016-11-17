<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 26/11/14
 * Time: 21:10
 */
?>

<form class="form-horizontal form-signin-signup" method="POST" action="" onsubmit="return valida(this)">
        <h4>Password</h4>
        <input type="password" name="password" placeholder="Password" />
        <h4>New Password</h4>
        <input type="password" name="newPassword" placeholder="New Password" />
        <input type="password" name="repeatNewPassword" placeholder="Repeat New Password" />
        <br/>
        <input type="submit" name="confirm" value="Confirm" class="btn btn-primary btn-large">
</form>