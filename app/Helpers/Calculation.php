<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

/**
 * Description of Calculation
 *
 * @author birendra
 */
class Calculation {

    /**
     * conver the time to minutes
     * @param type $time
     * @return type
     */
    function convertTimeToMinutes($time) {
        $timeArray = explode(':', $time);
        $minutes = $timeArray[0] * 60 + $time[1];
        return $minutes;
    }

    /**
     * 
     * @param string $time
     * @param type $time1
     * @return type
     */
    function addTimes($time, $time2) {
        $secs = strtotime($time2) - strtotime("00:00:00");
        $result = date("H:i:s", strtotime($time) + $secs);
        return $result;
    }

}
