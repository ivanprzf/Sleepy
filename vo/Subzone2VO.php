<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:41
 */

namespace Subzone2VO;


class Subzone2VO {
    public $subzone2Id;
    public $subzone2Name;
    public $subzone1Id;
    public $subzone2Photo;

    function __construct($subzone1Id, $subzone2Id, $subzone2Name, $subzone2Photo)
    {
        $this->subzone1Id = $subzone1Id;
        $this->subzone2Id = $subzone2Id;
        $this->subzone2Name = $subzone2Name;
        $this->subzone2Photo = $subzone2Photo;
    }


} 