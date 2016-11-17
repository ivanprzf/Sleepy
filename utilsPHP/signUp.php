<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 4/12/14
 * Time: 12:43
 */

?>

<form class="form-horizontal form-signin-signup" method="POST" action="signup.php" enctype="multipart/form-data" onsubmit="return valida(this)">
    <input type="text" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="password" name="password_confirmation" placeholder="Password Confirmation"/>

    <label><input type="radio" name="gender" value="male" checked />Male
        <input type="radio" name="gender" value="female">Female</label>

    <input type="text" name="firstName" placeholder="First Name"/>
    <input type="text" name="lastName" placeholder="Last Name"/>
    <br/>
    <select name="status" class="form-control">
        <option value="married">Married</option>
        <option value="widowed">Widowed</option>
        <option value="separated">Separated</option>
        <option value="divorced">Divorced</option>
        <option value="single">Single</option>
    </select>
    <br/><br/>
    <input type="text" name="birthDate" placeholder="Birth Date" onfocus="(this.type='date')"/>
    <input type="text" name="phone1" placeholder="Phone"/>
    <input type="text" name="phone2" placeholder="Phone 2(optional)"/>
    <br/>
    <label>Profile Pic(optional):</label>

    <input type="file" id="image" name="image" placeholder="Profile Pic"/>

    <div>
        <input type="submit" name="signup" value="Signup" class="btn btn-primary btn-large">
    </div>
</form>
<h4><i class="icon-question-sign"></i> Already have an account?</h4>
<a href="signin.php" class="btn btn-large bottom-space">Signin</a>