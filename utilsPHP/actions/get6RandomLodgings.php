<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 9/12/14
 * Time: 20:48
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');

$mysqli=openConnection();

$randomLodgingsList=get6LodgingsByViews($mysqli);

closeConnection($mysqli);