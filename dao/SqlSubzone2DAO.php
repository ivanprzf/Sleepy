<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 12/11/14
 * Time: 20:15
 */

function addSubzone2 (\Subzone2VO\Subzone2VO $subzone2, mysqli $mysqli)
{
        $query = "INSERT INTO subzones2
                  VALUES ('','". $subzone2->subzone2Name ."','". $subzone2->subzone1Id .",". $subzone2->subzone2Photo .");";
        $mysqli->query($query);
}

function getSubzone2 ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM subzones2
                  WHERE subzone2Id =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $rating = new \Subzone2VO\Subzone2VO($row['subzone1Id_FK'],$row['subzone2Id'],$row['subzone2Name'],$row['subzone2Photo']);
        }
}

function getAllSubzones2(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM subzones2;";
        $result =  $mysqli->query($query);
        $subzones2=array();

        while ($row = $result->fetch_assoc()) {
            $subzone2 = new \Subzone2VO\Subzone2VO($row['subzone1Id_FK'],$row['subzone2Id'],$row['subzone2Name'],$row['subzone2Photo']);
            array_push($subzones2, $subzone2);
        }
        return $subzones2;
}

function updateSubzone2 (\Subzone2VO\Subzone2VO $subzone2, mysqli $mysqli)
{
        $query = "UPDATE subzones2
                  SET subzone2Name='". $subzone2->subzone2Name ."',subzone1Id_FK=". $subzone2->subzone1Id ."',subzone2Photo=". $subzone2->subzone2Photo ."
                  WHERE photoId =".$subzone2->subzone2Id;
        $mysqli->query($query);
}