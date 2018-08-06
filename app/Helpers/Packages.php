<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Package
 *
 * @author birendra
 */

namespace App\Helpers;

use App\Package;

class Packages {

    function calculateExpiryDate($packageId, $date) {
        $packageDetail = Package::find($packageId);
        $expiryDate = $date;
        if (count($packageDetail) > 0) {
            //calculate the expiry date
            $durationArray = [1 => 'month', 2 => 'year', 3 => 'day'];
            $packageType = $durationArray[$packageDetail->packageType];
            $packageDuration = $packageDetail->packageDuration;
            $expiryDate = date('Y-m-d H:i:s', strtotime('+' . $packageDuration . ' ' . $packageType));
        }
        return $expiryDate;
    }

}
