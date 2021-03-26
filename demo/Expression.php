<?php

/**
 * File Name: demo/Expression.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: Mon Mar 22 15:46:06 2021
 */

require '../vendor/autoload.php';

use Symfony\Component\ExpressionLanguage\Expression;

class IndexController
{

    public function indexAction()
    {
        $this->denyAccessUnlessGranted(new Expression(
            '"ROLE_ADMIN" in roles or (user and user.isSuperAdmin())'
        ));

        // ...
    }

    /**
     * 非许可禁止访问
     *
     * @param bool $is_grante 
     */
    protected function denyAccessUnlessGranted($is_grante)
    {

        print_r($is_grante);
    }
}

$controller = new IndexController();
$controller->indexAction();

