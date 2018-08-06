<?php

namespace App\Http\Controllers;

use Google\Cloud\Speech\SpeechClient;
use Illuminate\Http\Request;

class CloudSpeechController extends Controller {

    protected $projectId;

    function __construct() {
        $this->projectId = env('projectId');
    }

    /**
     * convert speech to text
     */
    function convertSpeechToText($file = '') {
        if ($file != '') {
            $speech = new SpeechClient([
                'keyFilePath' => env('keyfile'),
                'projectId' => $this->projectId,
                'languageCode' => 'en-US'
            ]);
            $filename = $file;
            $options = [
//            'encoding' => 'LINEAR16',
                'encoding' => 'FLAC',
                'sampleRateHertz' => 16000,
                'languageCode' => 'en_US'
            ];
            $results = $speech->recognize(fopen($filename, 'r'), $options);
            return $results[0]->alternatives()[0];
        }
        return '';
    }

}
