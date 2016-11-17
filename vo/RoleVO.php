<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:32
 */

namespace RoleVO;


class RoleVO {
    public $roleId;
    public $roleName;
    public $roleDescription;

    function __construct($roleDescription, $roleId, $roleName)
    {
        $this->roleDescription = $roleDescription;
        $this->roleId = $roleId;
        $this->roleName = $roleName;
    }


}