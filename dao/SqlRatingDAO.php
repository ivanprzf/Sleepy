<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 12/11/14
 * Time: 19:40
 */

function addRating (\RatingVO\RatingVO $rating, mysqli $mysqli)
{
        $query = "INSERT INTO ratings
                  VALUES ('','". $rating->ratingPoints ."','". $rating->ratingPost ."','". $rating->userId .",'". $rating->lodgingId .");";
        $mysqli->query($query);
}

function getRating ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM ratings
                  WHERE ratingId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $rating = new \RatingVO\RatingVO($row['lodgingId'],$row['ratingId'],$row['ratingPoints'],$row['ratingPost'],$row['userId']);
        }
}

function getAllPhotos(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM ratings;";
        $result =  $mysqli->query($query);
        $ratings=array();

        while ($row = $result->fetch_assoc()) {
            $rating = new \RatingVO\RatingVO($row['lodgingId'],$row['ratingId'],$row['ratingPoints'],$row['ratingPost'],$row['userId']);
            array_push($ratings, $rating);
        }
        return $ratings;
}

function updateRating (\RatingVO\RatingVO $rating, mysqli $mysqli)
{
        $query = "UPDATE ratings
                  SET ratingPost='". $rating->ratingPost ."',ratingPoints=". $rating->ratingPoints ."
                  WHERE photoId =".$rating->ratingId;
        $mysqli->query($query);
}