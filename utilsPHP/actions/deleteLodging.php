<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/12/14
 * Time: 12:01
 */


require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');

$mysqli=openConnection();

deleteLodging($_POST['lodgingId'], $mysqli);
closeConnection($mysqli);

echo "Your lodging has been deleted!"."<br/>"."Go to your <a href='myLodgings.php'>Lodgings</a> and check that all changes are done.";