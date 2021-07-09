<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://0.0.0.0:8891/demo/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
    'on_stats' => function (TransferStats $stats) {
        echo 'getEffectiveUri:'. $stats->getEffectiveUri() . "\n";
        echo 'getTransferTime:'. $stats->getTransferTime() . "\n";
//        var_dump($stats->getHandlerStats());

        // You must check if a response was received before using the
        // response object.
        if ($stats->hasResponse()) {
            echo $stats->getResponse()->getStatusCode();
        } else {
            // Error data is handler specific. You will need to know what
            // type of error data your handler uses before using this
            // value.
            var_dump($stats->getHandlerErrorData());
        }
    }
]);
$response = $client->request('GET', 'json.php');