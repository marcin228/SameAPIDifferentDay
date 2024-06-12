<?php

    namespace src\router;

    use src\controllers\IController;
    class Route{
        private string $requestMethod;
        private string $path;
        private $class;
        private $methodInController;

        public function __construct(string $requestMethod, string $path, IController $class, string $methodInController){

            $this->requestMethod = $requestMethod;
            $this->path = $path;
            $this->class = $class;
            $this->methodInController = $methodInController;
        }
    }