<?php
    class Route{
        private string $requestMethod;
        private string $path;
        private $methodInController;

        public function __constructor(string $requestMethod, string $path, $methodInController){

            $this->requestMethod = $requestMethod;
            $this->path = $path;
            $this->methodInController = $methodInController;
        }
    }