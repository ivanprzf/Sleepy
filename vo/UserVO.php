<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 19:54
 */

namespace UserVO;


class UserVO {
    public $userId;
    public $userEmail;
    public $userPass;
    public $userFirstName;
    public $userLastName;
    public $userBirth;
    public $userGender;
    public $userStatus;
    public $userPic;
    public $userPhone;
    public $userPhone2;
    public $role;


    function __construct($userId, $userBirth, $userEmail, $userFirstName, $userGender, $userLastName, $userPass, $userPhone, $userPhone2, $userPic, $userStatus, $role)
    {
        $this->userId=$userId;
        $this->userBirth = $userBirth;
        $this->userEmail = $userEmail;
        $this->userFirstName = $userFirstName;
        $this->userGender = $userGender;
        $this->userLastName = $userLastName;
        $this->userPass = $userPass;
        $this->userPhone = $userPhone;
        $this->userPhone2 = $userPhone2;
        $this->userPic = $userPic;
        $this->userStatus = $userStatus;
        $this->role = $role;
    }

    function getAge(){ //?????
        list($Y,$m,$d) = explode("-",$this->$userBirth);
        return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }

} 