<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 19/11/14
 * Time: 19:14
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";


$mysqli=openConnection();

$user=getUserByEmail($_POST['email'],$mysqli);

if(gettype($user)=="object"){
    if (strcmp($user->userPass,hash("sha256",$_POST['password']))==0){
        session_start();
        $_SESSION['userId']=$user->userId;
        $_SESSION['userEmail']=$user->userEmail;
        $_SESSION['userNameComplete']=$user->userFirstName.' '.$user->userLastName;
        $_SESSION['userName']=$user->userFirstName;
        $_SESSION['userRole']=$user->role;
        header("Location: index.php");
    }
    else{
        echo "CONTRASE&ntilde;A INCORRECTA";
    }
}
else
    echo "EL USUARIO NO EXISTE MUCHACHO";

closeConnection($mysqli);


