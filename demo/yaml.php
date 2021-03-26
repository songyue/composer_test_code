<?php
/**
 * File Name: demo/yaml.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: Mon Mar 22 16:08:21 2021
 */

require '../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


try{
    $contents = file_get_contents('file.yml');

    echo '<pre>';
    var_dump($contents);

    $value = Yaml::parse($contents);
    var_dump($value);
    echo '</pre>';
}catch(ParseException $e){
    printf("Unable to parse the YAML string: %s", $e->getMessage());
}
