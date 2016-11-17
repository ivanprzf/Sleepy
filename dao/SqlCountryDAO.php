<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/11/14
 * Time: 20:27
 */


function addCountry (\CountryVO\CountryVO $country, mysqli $mysqli)
{
        $query = "INSERT INTO countries
                  VALUES ('','". $country->countryName ."','". $country->countryISOCode ."');";
        $mysqli->query($query);
}

function getCountry ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM countries
                  WHERE countryId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $country = new \CountryVO\CountryVO($row['countryISOCode'],$row['countryId'],$row['countryName']);
        }
        else
            return "";
}

function getAllCountries(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM countries;";
        $result =  $mysqli->query($query);
        $countries=array();

        while ($row = $result->fetch_assoc()) {
            $country = new \CountryVO\CountryVO($row['countryISOCode'],$row['countryId'],$row['countryName']);
            array_push($countries, $country);
        }
        return $countries;
}


function updateCountry (\CountryVO\CountryVO $country, mysqli $mysqli)
{
        $query = "UPDATE countries
                  SET countryName='". $country->countryName ."', countryISOCode='". $country->countryISOCode ."'
                  WHERE countryId =".$country->countryId;
        $mysqli->query($query);
}