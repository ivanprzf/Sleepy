<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 3/12/14
 * Time: 10:40
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');

$mysqli=openConnection();

$lodgingsList=getAllLodgingsBySubZone2Id($_POST['subzone2'],$mysqli);

closeConnection($mysqli);