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

if(ISSET($_POST['viewUser']) || ISSET($_POST['editUser']))
    $user=getUser($_POST['userId'],$mysqli);
else
    $user=getUser($_SESSION['userId'],$mysqli);

closeConnection($mysqli);


