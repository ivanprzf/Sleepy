<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 3/11/14
 * Time: 20:35
 */

namespace LogVO;


class LogVO {

    public $logId;
    public $logDescription;
    public $logDate;
    public $logTable;
    public $userId;

    function __construct($logDate, $logDescription, $logId, $logTable, $userId)
    {
        $this->logDate = $logDate;
        $this->logDescription = $logDescription;
        $this->logId = $logId;
        $this->logTable = $logTable;
        $this->userId = $userId;
    }


} 