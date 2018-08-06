<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

/**
 * Description of Validate
 *
 * @author birendra
 */
class Validate {

    /**
     * validate the current date and time
     * @param type $dateTime
     */
    function validateSessionDate($dateTime) {
        if (strtotime($dateTime) > strtotime('+30 minutes')) {
            return TRUE;
        }
        return FALSE;
    }

}
