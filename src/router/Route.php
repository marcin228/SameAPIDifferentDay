<?php

    namespace sameApiDifferentDay\router;

    use sameApiDifferentDay\data;

    class Route{
        private string $requestMethod;
        private string $path;
        private $controller;
        private $methodInController;
        private $methodParams;
        public function __construct(string $requestMethod, string $path, $controller, $methodInController){

            $this->requestMethod = $requestMethod;
            $this->path = $path;
            $this->controller = new $controller();
            $this->methodInController = $methodInController;
            $this->methodParams = [];

            $this->extractParameters($this->path);
        }

        public function find(string $requestMethod, string $path):bool{

            if($this->requestMethod == $requestMethod && $this->path == $path)
                return true;

            return false;
        }

        public function execRoute(){

            return $this->controller->{$this->methodInController}();
        }
        private function extractParameters($path):void{

            if(strpos($path, '/:') === false)
                return;

            for($i = 0, $l = strlen($path); $i < $l; $i++){
            
                $param = '';

                if($path[$i] == '/' && $path[$i+1] == ':'){

                    $i += 2;

                    while(isset($path[$i]) && $path[$i] !== '/'){

                        $param .= $path[$i];
                        $i++;
                    }
                }

                array_push($this->methodParams, $param);
            }
        }
    }