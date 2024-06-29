<?php

    namespace sameApiDifferentDay\router;

    use sameApiDifferentDay\controllers\Users;
    use sameApiDifferentDay\controllers\IController;
    class Router{

        private array $routes;
        private string $method;
        private string $uri;

        public function __construct(string $method, string $uri){

            $this->method = $method;
            $this->uri = $uri;
        }
        public function resolve(){

            $result = match(strtolower($this->method)){
                'get' => $this->resolveGet(),
                'post' => $this->resolvePost(),
                'put' => $this->resolvePut(),
                'delete' => $this->resolveDelete()
            };
        }
        private function resolveGet(){

            $baseUrl = '/same-api-different-day/php/src/index.php';
            $route = substr($this->uri, strlen($baseUrl), strlen($this->uri));

            for($i = 0, $l = count($this->routes); $i < $l; $i++){
                if($this->routes[$i]->find('get', $route)){
                    echo $this->routes[$i]->execRoute();
                    break;
                }
            }
        }

        private function resolvePost(){

            echo 'RESOLVING POST' . $this->uri;
        }

        private function resolvePut(){
        }

        private function resolveDelete(){
        }
        public function register(string $requestMethod, string $route, $controller, $method){

            $this->routes[] = new Route(strtolower($requestMethod), $route, $controller, $method);
        }
    }