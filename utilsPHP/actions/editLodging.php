<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 9/12/14
 * Time: 12:56
 */


require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');

$mysqli=openConnection();

if(!ISSET($_POST['breakfast']))$_POST['breakfast']='0';
if(!ISSET($_POST['dinner']))$_POST['dinner']='0';
if(!ISSET($_POST['heating']))$_POST['heating']='0';
if(!ISSET($_POST['pets']))$_POST['pets']='0';
if(!ISSET($_POST['smoker']))$_POST['smoker']='0';
if(!ISSET($_POST['sockets']))$_POST['sockets']='0';
if(!ISSET($_POST['free']))$_POST['free']='0';


$lodging = new \LodgingVO\LodgingVO($_SESSION['userId'],$mysqli->real_escape_string($_POST['address']),$_POST['free'],5,$mysqli->real_escape_string($_POST['bedType']),$_POST['breakfast'],$mysqli->real_escape_string($_POST['capacity']),$mysqli->real_escape_string($_POST['description']),$_POST['dinner'],$_POST['gmapsCoords'],$_POST['gender'],$_POST['heating'],$_POST['lodgingId'],$mysqli->real_escape_string($_POST['ppn']),$_POST['pets'],$mysqli->real_escape_string($_POST['size']),$_POST['smoker'],$_POST['sockets'],0,$_POST['subzone2']);

updateLodging($lodging, $mysqli);
closeConnection($mysqli);

echo "Your lodging has been updated!"."<br/>"."Go to your <a href='myLodgings.php'>Lodgings</a> and check that all changes are done.";