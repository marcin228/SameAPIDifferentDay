<?php

    namespace sameApiDifferentDay\router;

    use sameApiDifferentDay\data;

    class Route{
        private string $requestMethod;
        private string $path;
        private $controller;
        private $methodInController;

        public function __construct(string $requestMethod, string $path, $controller, $methodInController){

            $this->requestMethod = $requestMethod;
            $this->path = $path;
            $this->controller = new $controller();
            $this->methodInController = $methodInController;
        }

        public function find(string $requestMethod, string $path):bool{

            if($this->requestMethod == $requestMethod && $this->path == $path)
                return true;

            return false;
        }

        public function execRoute(){

            return $this->controller->{$this->methodInController}();
        }
    }