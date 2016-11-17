<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 5/12/14
 * Time: 10:29
 */

require_once "utils/config.php";
require_once "utils/openSqlConnection.php";
require_once "utils/closeSqlConnection.php";
require_once('dao/SqlLodgingDAO.php');
require_once('vo/LodgingVO.php');
require_once('dao/SqlPhotoDAO.php');
require_once('vo/PhotoVO.php');


$mysqli=openConnection();

if(!ISSET($_POST['breakfast']))$_POST['breakfast']='0';
if(!ISSET($_POST['dinner']))$_POST['dinner']='0';
if(!ISSET($_POST['heating']))$_POST['heating']='0';
if(!ISSET($_POST['pets']))$_POST['pets']='0';
if(!ISSET($_POST['smoker']))$_POST['smoker']='0';
if(!ISSET($_POST['sockets']))$_POST['sockets']='0';



$newLodging = new \LodgingVO\LodgingVO($_SESSION['userId'],$mysqli->real_escape_string($_POST['address']),1,5,$mysqli->real_escape_string($_POST['bedType']),$_POST['breakfast'],$mysqli->real_escape_string($_POST['capacity']),$mysqli->real_escape_string($_POST['description']),$_POST['dinner'],$_POST['gmapsCoords'],$_POST['gender'],$_POST['heating'],0,$mysqli->real_escape_string($_POST['ppn']),$_POST['pets'],$mysqli->real_escape_string($_POST['size']),$_POST['smoker'],$_POST['sockets'],0,$_POST['subzone2']);
addLodging($newLodging, $mysqli);
$insertedLodging=mysqli_insert_id($mysqli);

if(ISSET($_FILES['photos'])){
    $files=array();
    $fdata=$_FILES['photos'];
    if(is_array($fdata['name'])){
        for($i=0;$i<count($fdata['name']);++$i){
            $files[]=array(
                'name'    =>$fdata['name'][$i],
                'type'  => $fdata['type'][$i],
                'tmp_name'=>$fdata['tmp_name'][$i],
                'error' => $fdata['error'][$i],
                'size'  => $fdata['size'][$i]
            );
        }
    }else $files[]=$fdata;

    foreach ($files as $file) {
        include "utilsPHP/actions/multiUpload.php";
        $p = new \PhotoVO\PhotoVO($insertedLodging,"Descripcion",0,$imgName);
        AddPhoto($p,$mysqli);
    }
}

closeConnection($mysqli);

echo "Lodging has been created!"."<br/>"."Go to <a href='myLodgings.php'>Lodgings</a> page for check...";
