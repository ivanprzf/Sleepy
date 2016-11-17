<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/11/14
 * Time: 21:07
 */

function addLog (\LogVO\LogVO $log, mysqli $mysqli)
{
        $query = "INSERT INTO log
                  VALUES ('','". $log->logDescription ."','". $log->logDate ."','". $log->logTable .",'". $log->userId .");";
        $mysqli->query($query);
}

function getLog ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM log
                  WHERE logId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $log = new \LogVO\LogVO($row['logDate'],$row['logDescription'],$row['logId'],$row['logTable'],$row['userId']);
        }
}

function getAllLogs(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM log;";
        $result =  $mysqli->query($query);
        $logs=array();

        while ($row = $result->fetch_assoc()) {
            $log = new \LogVO\LogVO($row['logDate'],$row['logDescription'],$row['logId'],$row['logTable'],$row['userId']);
            array_push($logs, $log);
        }
        return $logs;
}