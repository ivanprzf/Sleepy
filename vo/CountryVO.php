<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:37
 */

namespace CountryVO;


class CountryVO {

    public $countryId;
    public $countryName;
    public $countryISOCode;

    function __construct($countryISOCode, $countryId, $countryName)
    {
        $this->countryISOCode = $countryISOCode;
        $this->countryId = $countryId;
        $this->countryName = $countryName;
    }


} 