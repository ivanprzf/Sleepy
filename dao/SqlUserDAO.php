<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/11/14
 * Time: 19:24
 */

function addUser (\UserVO\UserVO $user, mysqli $mysqli)
{
        $query = "INSERT INTO users
                  VALUES ('','". $user->userFirstName ."','". $user->userLastName ."' ,'". $user->userEmail ."','". $user->userBirth ."','". $user->userGender ."','". $user->userStatus ."','". $user->userPic ."','". $user->userPhone ."','". $user->userPhone2 ."','". $user->userPass ."','".$user->role ."');";
        $mysqli->query($query);
    return $user;
}

function deleteUser ($id, mysqli $mysqli)
{
    $query = "DELETE FROM users
                WHERE userId=".$id.";";
    $mysqli->query($query);
}

function getUser ($id, mysqli $mysqli)
{
        $query = "SELECT *
                  FROM users
                  WHERE userId =".$id.";";
        $result =  $mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            return $user = new \UserVO\UserVO($row['userId'],$row['userBirth'],$row['userEmail'],$row['userFirstName'],$row['userGender'],$row['userLastName'],$row['userPass'],$row['userPhone'],$row['userPhone2'],$row['userPic'],$row['userStatus'],$row['roleId_FK']);
        }
}

function getUserByEmail ($email, mysqli $mysqli)
{
    $query = "SELECT *
                  FROM users
                  WHERE userEmail ='".$email."';";
    $result =  $mysqli->query($query);
    if ($row = $result->fetch_assoc()) {
        return $user = new \UserVO\UserVO($row['userId'],$row['userBirth'],$row['userEmail'],$row['userFirstName'],$row['userGender'],$row['userLastName'],$row['userPass'],$row['userPhone'],$row['userPhone2'],$row['userPic'],$row['userStatus'],$row['roleId_FK']);
    }
    else
        return "";
}

function getAllUsers(mysqli $mysqli)
{
        $query = "SELECT *
                  FROM users;";
        $result =  $mysqli->query($query);
        $users=array();

        while ($row = $result->fetch_assoc()) {
            $user = new \UserVO\UserVO($row['userId'],$row['userBirth'],$row['userEmail'],$row['userFirstName'],$row['userGender'],$row['userLastName'],$row['userPass'],$row['userPhone'],$row['userPhone2'],$row['userPic'],$row['userStatus'],$row['roleId_FK']);
            array_push($users, $user);
        }
        return $users;
}


function updateUser (\UserVO\UserVO $user, mysqli $mysqli) //Doesn't edit the password
{
        $query = "UPDATE users
                  SET userFirstName='". $user->userFirstName ."',userLastName='". $user->userLastName ."' ,userEmail='". $user->userEmail ."',userBirth='". $user->userBirth ."',
                      userGender='". $user->userGender ."',userStatus='". $user->userStatus ."',userPic='". $user->userPic ."',userPhone='". $user->userPhone ."',
                      userPhone2='". $user->userPhone2 ."',roleId_FK=".$user->role ."
                  WHERE userId =".$user->userId;
        $mysqli->query($query);
}

function updateUserPassword ($userId, $newPassword, mysqli $mysqli) //Doesn't edit the password
{
    $query = "UPDATE users
                  SET userPass='". $newPassword ."'
                  WHERE userId =".$userId;
    $mysqli->query($query);
}