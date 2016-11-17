<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 12/11/14
 * Time: 20:09
 */



function addSubzone1 (\Subzone1VO\Subzone1VO $subzone1, mysqli $mysqli)
{
        $query = "INSERT INTO subzones1
                  VALUES ('','". $subzone1->subzone1Name ."','". $subzone1->countryId .");";
        $mysqli->query($query);
}

function getSubzone1 ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM subzones1
                  WHERE subzone1Id =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $rating = new \Subzone1VO\Subzone1VO($row['countryId'],$row['subzone1Id'],$row['subzone1Name']);
        }
}

function getAllSubzones1(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM subzones1;";
        $result =  $mysqli->query($query);
        $subzones1=array();

        while ($row = $result->fetch_assoc()) {
            $subzone1 = new \Subzone1VO\Subzone1VO($row['countryId'],$row['subzone1Id'],$row['subzone1Name']);
            array_push($subzones1, $subzone1);
        }
        return $subzones1;
}

function updateSubzone1 (\Subzone1VO\Subzone1VO $subzone1, mysqli $mysqli)
{
        $query = "UPDATE subzones1
                  SET subzone1Name='". $subzone1->subzone1Name ."',countryId=". $subzone1->countryId ."
                  WHERE photoId =".$subzone1->subzone1Id;
        $mysqli->query($query);
}