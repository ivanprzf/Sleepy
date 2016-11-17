<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:20
 */

namespace RatingVO;


class RatingVO {

    public $ratingId;
    public $ratingPoints;
    public $ratingPost;
    public $userId;
    public $lodgingId;

    function __construct($lodgingId, $ratingId, $ratingPoints, $ratingPost, $userId)
    {
        $this->lodgingId = $lodgingId;
        $this->ratingId = $ratingId;
        $this->ratingPoints = $ratingPoints;
        $this->ratingPost = $ratingPost;
        $this->userId = $userId;
    }


} 