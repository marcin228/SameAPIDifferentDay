<?php

    require_once  '../vendor/autoload.php';

    use src\router\Router;

    echo 'SCRIPT WORKING';

    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    $router = new Router($method, $uri);

    /*
    $router->register();
    $router->register();
    $router->register();
    $router->register();

    $router->resolve();
    */