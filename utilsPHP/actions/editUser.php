<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 25/11/14
 * Time: 21:53
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";

$mysqli=openConnection();
//

if(strcmp($_FILES['image']['name'],"")==0){
    $user = new \UserVO\UserVO($_POST['userId'],$mysqli->real_escape_string($_POST['birthDate']),$mysqli->real_escape_string($_POST['email']),$mysqli->real_escape_string($_POST['firstName']),$_POST['gender'],$mysqli->real_escape_string($_POST['lastName']),"",$mysqli->real_escape_string($_POST['phone1']),$mysqli->real_escape_string($_POST['phone2']),$_POST['imgurl'],$_POST['status'],2);
}
else{
    include "upload.php";
    $user = new \UserVO\UserVO($_POST['userId'],$mysqli->real_escape_string($_POST['birthDate']),$mysqli->real_escape_string($_POST['email']),$mysqli->real_escape_string($_POST['firstName']),$_POST['gender'],$mysqli->real_escape_string($_POST['lastName']),"",$mysqli->real_escape_string($_POST['phone1']),$mysqli->real_escape_string($_POST['phone2']),$imgName,$_POST['status'],2);
}
updateUser($user, $mysqli);
closeConnection($mysqli);

echo "Your profile has been updated!"."<br/>"."Go to your <a href='profile.php'>Profile</a> and check that all changes are done.";