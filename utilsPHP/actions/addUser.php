<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 19/11/14
 * Time: 19:04
 */
require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";

$mysqli=openConnection();
if($_FILES['image']['name']!=''){
    include "upload.php";
    $newUser = new \UserVO\UserVO(0,$mysqli->real_escape_string($_POST['birthDate']),$mysqli->real_escape_string($_POST['email']),$mysqli->real_escape_string($_POST['firstName']),$mysqli->real_escape_string($_POST['gender']),$mysqli->real_escape_string($_POST['lastName']),hash("sha256",$mysqli->real_escape_string($_POST['password'])),$mysqli->real_escape_string($_POST['phone1']),$mysqli->real_escape_string($_POST['phone2']),$imgName,$_POST['status'],2);
}
else
    $newUser = new \UserVO\UserVO(0,$mysqli->real_escape_string($_POST['birthDate']),$mysqli->real_escape_string($_POST['email']),$mysqli->real_escape_string($_POST['firstName']),$mysqli->real_escape_string($_POST['gender']),$mysqli->real_escape_string($_POST['lastName']),hash("sha256",$mysqli->real_escape_string($_POST['password'])),$mysqli->real_escape_string($_POST['phone1']),$mysqli->real_escape_string($_POST['phone2']),'user.png',$_POST['status'],2);

addUser($newUser, $mysqli);
closeConnection($mysqli);

echo "User has been created!"."<br/>"."Go to <a href='signin.php'>Login</a> page for first login...";
