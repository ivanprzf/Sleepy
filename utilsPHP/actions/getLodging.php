<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 3/12/14
 * Time: 13:58
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');

$mysqli=openConnection();

if(!ISSET($_POST['lodgingId'])){
    $lodging=getLodging($_GET['lodgingId'],$mysqli);
    increaseViews($_GET['lodgingId'],$mysqli);
}
else{
    $lodging=getLodging($_POST['lodgingId'],$mysqli);
}


closeConnection($mysqli);