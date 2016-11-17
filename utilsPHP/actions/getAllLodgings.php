<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/12/14
 * Time: 12:37
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');

$mysqli=openConnection();

$lodgingsList=getAllLodgings($mysqli);

closeConnection($mysqli);