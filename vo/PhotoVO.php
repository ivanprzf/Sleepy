<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:29
 */

namespace PhotoVO;


class PhotoVO {

    public $photoId;
    public $photoURL;
    public $photoDescription;
    public $lodgingId;

    function __construct($lodgingId, $photoDescription, $photoId, $photoURL)
    {
        $this->lodgingId = $lodgingId;
        $this->photoDescription = $photoDescription;
        $this->photoId = $photoId;
        $this->photoURL = $photoURL;
    }


}