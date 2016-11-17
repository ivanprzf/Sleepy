<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 12/11/14
 * Time: 20:01
 */


function addRole (\RoleVO\RoleVO $role, mysqli $mysqli)
{
        $query = "INSERT INTO roles
                  VALUES ('','". $role->roleName ."','". $role->roleDescription .");";
        $mysqli->query($query);
}

function getRole ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM roles
                  WHERE roleId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $rating = new \RoleVO\RoleVO($row['roleDescription'],$row['roleId'],$row['roleName']);
        }
}

function getAllRoles(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM roles;";
        $result =  $mysqli->query($query);
        $roles=array();

        while ($row = $result->fetch_assoc()) {
            $role = new \RoleVO\RoleVO($row['roleDescription'],$row['roleId'],$row['roleName']);
            array_push($roles, $role);
        }
        return $roles;
}

function updateRole (\RoleVO\RoleVO $role, mysqli $mysqli)
{
        $query = "UPDATE roles
                  SET roleName='". $role->roleName ."',roleDescription=". $role->roleDescription ."
                  WHERE photoId =".$role->roleId;
        $mysqli->query($query);
}