<?php

    namespace sameApiDifferentDay\data;

    use sameApiDifferentDay\controllers\IController;
    use sameApiDifferentDay\data\PDOStorage;
    class PDOUsers extends PDOStorage implements IController{
    
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