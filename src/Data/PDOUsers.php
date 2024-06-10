<?php

    require_once __DIR__ . './../vendor/autoload.php';

    use Src\Data\IStorage;
    use Src\Data\PDOStorage;
    class PDOUsers extends PDOStorage implements IStorage{
    
        public function getOne(int $id){
        
        }
        public function getAll(){

        }
        public function create(array $arr){
        
        }
        public function update(int $id, array $arr){

        }
        public function delete(int $id){
        }
    }