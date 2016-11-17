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
        <input type="text" name="email" placeholder="Email" value="<?php echo $user->userEmail ?>"/>
        <h4>First Name</h4>
        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $user->userFirstName ?>"/>
        <h4>Status</h4>
        <select name="status" class="form-control">
            <option value="married" <?php if(strcmp($user->userStatus,"married")==0) echo 'selected="selected"'?> >Married</option>
            <option value="widowed" <?php if(strcmp($user->userStatus,"widowed")==0) echo 'selected="selected"' ?> >Widowed</option>
            <option value="separated" <?php if(strcmp($user->userStatus,"separated")==0) echo 'selected="selected"' ?> >Separated</option>
            <option value="divorced" <?php if(strcmp($user->userStatus,"divorced")==0) echo 'selected="selected"' ?> >Divorced</option>
            <option value="single" <?php if(strcmp($user->userStatus,"single")==0) echo 'selected="selected"' ?> >Single</option>
        </select>
        <h4>Phone 1</h4>
        <input type="text" name="phone1" placeholder="Phone" value="<?php echo $user->userPhone ?> "/>
    </div>

    <div class="form-profile">
        <h4>Gender</h4>
        <label style="height:39px;"><input type="radio" name="gender" value="male" <?php if(strcmp($user->userGender,"male")==0) echo 'checked' ?>  />Male
            <input type="radio" name="gender" value="female" <?php if(strcmp($user->userGender,"female")==0) echo 'checked' ?> >Female</label>

        <h4>Last Name</h4>
        <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $user->userLastName ?>"/>
        <h4>Birth Date</h4>
        <input type="text" name="birthDate" placeholder="Birth Date" value="<?php echo $user->userBirth ?>" onfocus="(this.type='date')"/>
        <h4>Phone 2</h4>
        <input type="text" name="phone2" placeholder="Phone 2(optional)" value="<?php echo $user->userPhone2 ?>"/>
    </div>

    <div>
        <h5>Profile Pic(optional):</h5>
        <img src="uploadedImages/<?php echo $user->userPic ?>" class="img-polaroid img-profile"/><br/><br/>
        <input type="hidden" name="imgurl" value="<?php echo $user->userPic ?>"/>
        <input type="file" name="image" placeholder="Profile Pic" />
    </div>

    <br/>
    <div>
        <input type="hidden" name="userId" value="<?php echo $user->userId ?>"/>
        <input type="submit" name="confirm" value="Confirm changes" class="btn btn-primary btn-large">
    </div>
</form>