<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/12/14
 * Time: 13:07
 */


require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlUserDAO.php');
require_once('vo/UserVO.php');

$mysqli=openConnection();

deleteUser($_POST['userId'], $mysqli);
closeConnection($mysqli);

echo "User has been deleted!"."<br/>"."Go to  <a href='adminUsers.php'>Users</a> and check that all changes are done.";