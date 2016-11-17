<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/11/14
 * Time: 21:17
 */

function addPhoto (\PhotoVO\PhotoVO $photo, mysqli $mysqli)
{
        $query = "INSERT INTO photos
                  VALUES ('','". $photo->photoURL ."','". $photo->photoDescription ."',". $photo->lodgingId .");";
        $mysqli->query($query);
}


function getPhoto ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM photos
                  WHERE photoId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $log = new \PhotoVO\PhotoVO($row['lodgingId'],$row['photoDescription'],$row['photoId'],$row['photoURL']);
        }
}

function getAllPhotos(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM photos;";
        $result =  $mysqli->query($query);
        $photos=array();

        while ($row = $result->fetch_assoc()) {
            $photo = new \PhotoVO\PhotoVO($row['lodgingId'],$row['photoDescription'],$row['photoId'],$row['photoURL']);
            array_push($photos, $photo);
        }
        return $photos;
}

function updatePhoto (\PhotoVO\PhotoVO $photo, mysqli $mysqli)
{
        $query = "UPDATE photos
                  SET photoURL='". $photo->photoURL ."',photoDescription='". $photo->photoDescription ."'
                  WHERE photoId =".$photo->photoId;
        $mysqli->query($query);
}

function getAllPhotosByLodging($id,mysqli $mysqli)
{
    $query = "SELECT *
                  FROM photos
                  WHERE lodgingId_FK=".$id;
    $result =  $mysqli->query($query);
    $photos=array();

    while ($row = $result->fetch_assoc()) {
        $photo = new \PhotoVO\PhotoVO($row['lodgingId_FK'],$row['photoDescription'],$row['photoId'],$row['photoURL']);
        array_push($photos, $photo);
    }
    return $photos;
}