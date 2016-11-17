<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 5/12/14
 * Time: 10:54
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlSubzone2DAO.php');
require_once('vo/Subzone2VO.php');

$mysqli=openConnection();
$subZones2 = getAllSubzones2($mysqli);
closeConnection($mysqli);

