<?php
/**
 * File Name: predis.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: Fri Jul  9 18:34:10 2021
 */

require '../vendor/autoload.php';

// Parameters passed using a named array:
$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

$keys = $client->keys('*');
print_r($keys);
// Same set of parameters, passed using an URI string:
//$client = new Predis\Client('tcp://10.0.0.1:6379');