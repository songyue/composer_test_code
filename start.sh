#!/bin/bash
# File Name: start.sh
# Author: songyue
# mail: songyue118@gmail.com
# Created Time: Fri Mar 19 10:21:05 2021
php=`which php`
$php -S 0.0.0.0:8891 &
open http://0.0.0.0:8891/demo_list.php

