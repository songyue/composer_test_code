<?php

/**
 * File Name: index.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: Thu Mar 18 14:50:54 2021
 */

require '../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

//var_dump($request);
print_r(['languages' => $request->getLanguages()]);
echo '<br>';
print_r(['attributes' => $request->attributes]);
echo '<br>';
print_r(['query->all' => $request->query->all()]);
echo '<br>';
print_r(['query->get(a)' => $request->query->get('a')]);
echo '<br>';
