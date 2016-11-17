<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/11/14
 * Time: 20:42
 */

function addLodging (LodgingVO\LodgingVO $lodging, mysqli $mysqli)
{
        $query = "INSERT INTO lodgings
                  VALUES ('','". $lodging->lodgingAddress ."','". $lodging->lodgingDescription ."','".  $lodging->lodgingSmoker ."','". $lodging->lodgingPets ."','". $lodging->lodgingBedType ."',
                              '". $lodging->lodgingGenderPreference ."','". $lodging->lodgingHeating ."','". $lodging->lodgingSize ."','". $lodging->lodgingSockets ."',
                              '". $lodging->lodgingBreakfast ."','". $lodging->lodgingDinner ."','". $lodging->lodgingGMaps ."','". $lodging->lodgingCapacity ."',
                              '". $lodging->lodgingAverageRating ."','". $lodging->lodgingViews ."','". $lodging->lodgingPPN ."','".  $lodging->lodgingFree ."',
                              '". $lodging->userId ."','". $lodging->subZone2Id ."');";
        $mysqli->query($query);
}

function deleteLodging ($id, mysqli $mysqli)
{
    $query = "DELETE FROM lodgings
                WHERE lodgingId=".$id.";";
    $mysqli->query($query);
}

function getLodging ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM lodgings
                  WHERE lodgingId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $lodging = new LodgingVO\LodgingVO($row['userId_FK'], $row['lodgingAddress'],$row['lodgingFree'],$row['lodgingAverageRating'],$row['lodgingBedType'],$row['lodgingBreakfast'],$row['lodgingCapacity'],$row['lodgingDescription'],
                $row['lodgingDinner'],$row['lodgingGMaps'],$row['lodgingGenderPreference'],$row['lodgingHeating'],$row['lodgingId'],$row['lodgingPPN'],
                $row['lodgingPets'],$row['lodgingSize'],$row['lodgingSmoker'],$row['lodgingSockets'],$row['lodgingViews'],$row['subzone2Id_FK']);
        }
}

function getAllLodgings(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM lodgings;";
        $result =  $mysqli->query($query);
        $lodgings=array();

        while ($row = $result->fetch_assoc()) {
            $lodging = new LodgingVO\LodgingVO($row['userId_FK'], $row['lodgingAddress'],$row['lodgingFree'],$row['lodgingAverageRating'],$row['lodgingBedType'],$row['lodgingBreakfast'],$row['lodgingCapacity'],$row['lodgingDescription'],
                $row['lodgingDinner'],$row['lodgingGMaps'],$row['lodgingGenderPreference'],$row['lodgingHeating'],$row['lodgingId'],$row['lodgingPPN'],
                $row['lodgingPets'],$row['lodgingSize'],$row['lodgingSmoker'],$row['lodgingSockets'],$row['lodgingViews'],$row['subzone2Id_FK']);
            array_push($lodgings, $lodging);
        }
        return $lodgings;
}

function getAllLodgingsByUser($id, mysqli $mysqli)
{
    $query = "SELECT *
              FROM lodgings
              WHERE userId_FK=".$id.";";
    $result =  $mysqli->query($query);
    $lodgings=array();

    while ($row = $result->fetch_assoc()) {
        $lodging = new LodgingVO\LodgingVO($row['userId_FK'], $row['lodgingAddress'],$row['lodgingFree'],$row['lodgingAverageRating'],$row['lodgingBedType'],$row['lodgingBreakfast'],$row['lodgingCapacity'],$row['lodgingDescription'],
            $row['lodgingDinner'],$row['lodgingGMaps'],$row['lodgingGenderPreference'],$row['lodgingHeating'],$row['lodgingId'],$row['lodgingPPN'],
            $row['lodgingPets'],$row['lodgingSize'],$row['lodgingSmoker'],$row['lodgingSockets'],$row['lodgingViews'],$row['subzone2Id_FK']);
        array_push($lodgings, $lodging);
    }
    return $lodgings;
}


function updateLodging (LodgingVO\LodgingVO $lodging, mysqli $mysqli)
{
        $query = "UPDATE lodgings
                  SET lodgingAddress='". $lodging->lodgingAddress ."', lodgingFree=". $lodging->lodgingFree .", lodgingDescription='". $lodging->lodgingDescription ."', lodgingSmoker=".  $lodging->lodgingSmoker .", lodgingPets=". $lodging->lodgingPets .", lodgingBedType='". $lodging->lodgingBedType ."',
                           lodgingGenderPreference='". $lodging->lodgingGenderPreference ."',lodgingHeating=". $lodging->lodgingHeating .",lodgingSize=". $lodging->lodgingSize .",lodgingSockets=". $lodging->lodgingSockets .",
                           lodgingBreakfast=". $lodging->lodgingBreakfast .",lodgingDinner=". $lodging->lodgingDinner .",lodgingGMaps='". $lodging->lodgingGMaps ."',lodgingCapacity=". $lodging->lodgingCapacity .",
                           lodgingAverageRating=". $lodging->lodgingAverageRating .",lodgingPPN=". $lodging->lodgingPPN .",subzone2Id_FK=". $lodging->subZone2Id ."
                  WHERE lodgingId =".$lodging->lodgingId;
        $mysqli->query($query);
}

function increaseViews ($id, mysqli $mysqli)
{
    $query = "UPDATE lodgings
                  SET lodgingViews=lodgingViews+1
                  WHERE lodgingId =".$id;
    $mysqli->query($query);
}

function get6LodgingsByViews(mysqli $mysqli)
{
    $query = "SELECT *
                  FROM lodgings
                  ORDER BY lodgingViews DESC
                  LIMIT 6";
    $result =  $mysqli->query($query);
    $lodgings=array();

    while ($row = $result->fetch_assoc()) {
        $lodging = new LodgingVO\LodgingVO($row['userId_FK'], $row['lodgingAddress'],$row['lodgingFree'],$row['lodgingAverageRating'],$row['lodgingBedType'],$row['lodgingBreakfast'],$row['lodgingCapacity'],$row['lodgingDescription'],
            $row['lodgingDinner'],$row['lodgingGMaps'],$row['lodgingGenderPreference'],$row['lodgingHeating'],$row['lodgingId'],$row['lodgingPPN'],
            $row['lodgingPets'],$row['lodgingSize'],$row['lodgingSmoker'],$row['lodgingSockets'],$row['lodgingViews'],$row['subzone2Id_FK']);
        array_push($lodgings, $lodging);
    }
    return $lodgings;
}

function getAllLodgingsBySubZone2Id($id, mysqli $mysqli)
{
    $query = "SELECT *
              FROM lodgings
              WHERE subzone2Id_FK=".$id.";";
    $result =  $mysqli->query($query);
    $lodgings=array();

    while ($row = $result->fetch_assoc()) {
        $lodging = new LodgingVO\LodgingVO($row['userId_FK'], $row['lodgingAddress'],$row['lodgingFree'],$row['lodgingAverageRating'],$row['lodgingBedType'],$row['lodgingBreakfast'],$row['lodgingCapacity'],$row['lodgingDescription'],
            $row['lodgingDinner'],$row['lodgingGMaps'],$row['lodgingGenderPreference'],$row['lodgingHeating'],$row['lodgingId'],$row['lodgingPPN'],
            $row['lodgingPets'],$row['lodgingSize'],$row['lodgingSmoker'],$row['lodgingSockets'],$row['lodgingViews'],$row['subzone2Id_FK']);
        array_push($lodgings, $lodging);
    }
    return $lodgings;
}