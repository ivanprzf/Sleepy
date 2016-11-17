<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:11
 */

namespace LodgingVO;


class LodgingVO {
    public $lodgingId;
    public $lodgingAddress;
    public $lodgingDescription;
    public $lodgingSmoker;
    public $lodgingPets;
    public $lodgingBedType;
    public $lodgingGenderPreference;
    public $lodgingHeating;
    public $lodgingSize;
    public $lodgingSockets;
    public $lodgingBreakfast;
    public $lodgingDinner;
    public $lodgingCapacity;
    public $lodgingGMaps;
    public $lodgingPPN;
    public $lodgingAverageRating;
    public $lodgingViews;
    public $lodgingFree;
    public $subZone2Id;
    public $userId;


    function __construct($userId, $lodgingAddress, $lodgingFree, $lodgingAverageRating, $lodgingBedType, $lodgingBreakfast, $lodgingCapacity, $lodgingDescription, $lodgingDinner, $lodgingGMaps, $lodgingGenderPreference, $lodgingHeating, $lodgingId, $lodgingPPN, $lodgingPets, $lodgingSize, $lodgingSmoker, $lodgingSockets, $lodgingViews, $subZone2Id)
    {
        $this->userId = $userId;
        $this->lodgingAddress = $lodgingAddress;
        $this->lodgingFree = $lodgingFree;
        $this->lodgingAverageRating = $lodgingAverageRating;
        $this->lodgingBedType = $lodgingBedType;
        $this->lodgingBreakfast = $lodgingBreakfast;
        $this->lodgingCapacity = $lodgingCapacity;
        $this->lodgingDescription = $lodgingDescription;
        $this->lodgingDinner = $lodgingDinner;
        $this->lodgingGMaps = $lodgingGMaps;
        $this->lodgingGenderPreference = $lodgingGenderPreference;
        $this->lodgingHeating = $lodgingHeating;
        $this->lodgingId = $lodgingId;
        $this->lodgingPPN = $lodgingPPN;
        $this->lodgingPets = $lodgingPets;
        $this->lodgingSize = $lodgingSize;
        $this->lodgingSmoker = $lodgingSmoker;
        $this->lodgingSockets = $lodgingSockets;
        $this->lodgingViews = $lodgingViews;
        $this->subZone2Id = $subZone2Id;
    }


}