<?php

    require_once  '../vendor/autoload.php';

    use sameApiDifferentDay\router\Router;
    use sameApiDifferentDay\data\MongoDBUsers;

    echo 'SCRIPT WORKING';

    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    // $router = new Router($method, $uri);

    $mdb = new MongoDBUsers();
    $mdb->getAll();

    /*
    $router->register();
    $router->register();
    $router->register();
    $router->register();

    $router->resolve();
    */