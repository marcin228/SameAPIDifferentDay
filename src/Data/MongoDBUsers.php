<?php

    namespace sameApiDifferentDay\data;
    
    use sameApiDifferentDay\data\IStorage;
    use sameApiDifferentDay\data\MongoDBStorage;
    class MongoDBUsers extends MongoDBStorage implements IStorage{
    
        public function getOne(int $id){

        }
        public function getAll(){

            $db = $this->getHandle()->database;
            $collection = $db->Users;

            $cursor = $collection->find();

            foreach ($cursor as $document){
                foreach($document as $key => $value){

                    echo $key . ' -> ' . $value . PHP_EOL;
                }
            }
        }
        public function create(array $arr){
        
        }
        public function update(int $id, array $arr){

        }
        public function delete(int $id){
        }
    }