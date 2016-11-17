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
$user=getUser ($_SESSION['userId'], $mysqli);

if(strcmp($mysqli->real_escape_string($_POST['newPassword']),$mysqli->real_escape_string($_POST['repeatNewPassword']))==0 && strcmp(hash("sha256",$mysqli->real_escape_string($_POST['password'])), $user->userPass)==0){
    updateUserPassword($_SESSION['userId'],hash("sha256",$mysqli->real_escape_string($_POST['newPassword'])), $mysqli);
    echo "Your password has been changed!"."<br/>"."Go to your <a href='profile.php'>Profile</a>.";
}
else{
    echo "Some data were given wrong."."<br/>"."Go to your <a href='profile.php'>Profile</a>.";
}
closeConnection($mysqli);

