<?php

    namespace sameApiDifferentDay\data;

    use MongoDB;
    class MongoDBStorage{

        private $handle;
        public function __construct(){

            $this->handle = new MongoDB\Client('mongodb://localhost:27017/');
        }
        protected function getHandle(){

            return $this->handle;
        }

        protected function connect(){
        
        }
        protected function disconnect(){
        
        }
    }