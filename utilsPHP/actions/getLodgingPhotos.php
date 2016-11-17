<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 9/12/14
 * Time: 14:02
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlPhotoDAO.php');
require_once('vo/PhotoVO.php');

$mysqli=openConnection();
$photosList=getAllPhotosByLodging($lodging->lodgingId,$mysqli);

closeConnection($mysqli);