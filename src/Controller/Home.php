<?php

namespace Bouhouch\PhpRestApi\Controller;

class Home
{
    public function indexAction()
    { 
        // you could add the twig package 'composer require "twig/twig:^2.0"' 
        // and use it as "echo $twig->render('index', ['name' => 'Fabien']);"
        echo 'Hello from Controller';
    }
}