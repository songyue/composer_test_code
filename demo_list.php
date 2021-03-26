<?php

/**
 * File Name: demo_list.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: Fri Mar 19 10:23:05 2021
 */

require 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->files()->in(__DIR__ . DIRECTORY_SEPARATOR . 'demo');

$demo_list = [];
foreach ($finder as $file) {
    // Dump the absolute path  剥离出绝对路径
    // var_dump($file->getRealPath());

    // Dump the relative path to the file, omitting the filename
    // 剥离出文件的相对路径,忽略文件名
    // var_dump($file->getRelativePath());

    // Dump the relative path to the file
    // 剥离出文件的相对路径
    // var_dump($file->getRelativePathname());
    $demo_list[] = $file->getRelativePathname();
}

function print_list($files, $dir = '/demo')
{
    foreach($files as $file) {
        printf("<a href='%s/%s'>%s</a><br>", $dir, $file, $file);
    }
}

print_list($demo_list);
