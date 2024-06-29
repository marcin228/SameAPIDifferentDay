<?php

    /**

        Current endpoints:

        mongoDB
            /users/
            /users/:id

     */

    require_once  '../vendor/autoload.php';

    use sameApiDifferentDay\router\Router;
    use sameApiDifferentDay\data\MongoDBUsers;

    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    $router = new Router($method, $uri);

    $router->register('get', '/users', MongoDBUsers::class, 'getAll');
    $router->register('post', '/users', MongoDBUsers::class, 'getAll');

    $router->resolve();

    //$mdb = new MongoDBUsers();
    //$mdb->getAll();

    /*
    */