<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/12/14
 * Time: 12:43
 */


require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlUserDAO.php');
require_once('vo/UserVO.php');

$mysqli=openConnection();

$userList=getAllUsers($mysqli);

closeConnection($mysqli);