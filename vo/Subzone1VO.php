<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:39
 */

namespace Subzone1VO;


class Subzone1VO {
    public $subzone1Id;
    public $subzone1Name;
    public $countryId;

    function __construct($countryId, $subzone1Id, $subzone1Name)
    {
        $this->countryId = $countryId;
        $this->subzone1Id = $subzone1Id;
        $this->subzone1Name = $subzone1Name;
    }


} 