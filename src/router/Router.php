<?php

    namespace sameApiDifferentDay\router;

    use sameApiDifferentDay\controllers\Users;
    class Router{

        private array $routes;
        private string $method;
        private string $uri;

        public function __construct(string $method, string $uri){

            $this->method = $method;
            $this->uri = $uri;
        }
        public function resolve(){

            /*
            match($this->method){
                'get', 'GET' => $this->resolveGet(),
                'post', 'POST' => $this->resolvePost(),
                'put', 'PUT' => $this->resolvePut(),
                'delete', 'DELETE' => $this->resolveDelete()
            }
            */
        }
        private function resolveGet(){
        }

        private function resolvePost(){
        }

        private function resolvePut(){
        }

        private function resolveDelete(){
        }
        private function register(string $requestMethod, string $route, $controller, callable $method){

            //$this->routes[] = new Route($requestMethod, $route, Users::class, 'getAll');
        }
    }