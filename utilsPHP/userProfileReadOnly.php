<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 24/11/14
 * Time: 20:27
 */

?>

<form class="" method="POST" action="profile.php" enctype="multipart/form-data">
    <div class="form-profile">
        <h4>Email</h4>
        <input type="text" name="email" placeholder="Email" value="<?php echo $user->userEmail ?>" readonly/>
        <h4>First Name</h4>
        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $user->userFirstName ?>" readonly/>
        <h4>Status</h4>
        <input type="text" name="status" placeholder="Status" value="<?php echo $user->userStatus ?>" readonly/>
        <h4>Phone 1</h4>
        <input type="text" name="phone1" placeholder="Phone" value="<?php echo $user->userPhone ?> " readonly/>
    </div>

    <div class="form-profile">
        <h4>Gender</h4>
        <input type="text" name="gender" placeholder="Email" value="<?php echo $user->userGender ?>" readonly/>
        <h4>Last Name</h4>
        <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $user->userLastName ?>" readonly/>
        <h4>Birth Date</h4>
        <input type="text" name="birthDate" placeholder="Birth Date" value="<?php echo $user->userBirth ?>" onfocus="(this.type='date')" readonly/>
        <h4>Phone 2</h4>
        <input type="text" name="phone2" placeholder="Phone 2(optional)" value="<?php echo $user->userPhone2 ?>" readonly/>
    </div>

    <div>
        <h5>Profile Pic(optional):</h5>
        <img src="uploadedImages/<?php echo $user->userPic ?>" class="img-polaroid img-profile"/><br/><br/><br/>
    </div>

    <br/>
    <div>
        <input type="submit" name="edit" value="Edit Profile" class="btn btn-primary btn-large">
        &nbsp;
        <input type="button" name="editPass" value="Edit Password" class="btn btn-primary btn-large" onclick="document.location ='password.php'">
    </div>
</form>