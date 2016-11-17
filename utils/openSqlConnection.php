<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 12/11/14
 * Time: 20:27
 */


function openConnection(){


    $mysqli = new mysqli(SERVER, USER, PASS, DB);
    if ($mysqli->connect_errno) {
        echo "MySQL connection has failed: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
    {
        return $mysqli;
    }
}

