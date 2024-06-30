<?php

    namespace sameApiDifferentDay\data;
    
    use sameApiDifferentDay\controllers\IController;
    use sameApiDifferentDay\data\MongoDBStorage;
    class MongoDBUsers extends MongoDBStorage implements IController{
    
        public function getOne(int $id){

            $result = [];

            $db = $this->getHandle()->database;
            $collection = $db->Users;

            $select = array('id' => $id);
            $cursor = $collection->find($select);

            foreach ($cursor as $document)
                array_push($result, $document);

            return json_encode($result[0]);
        }
        public function getAll(){

            $result = [];

            $db = $this->getHandle()->database;
            $collection = $db->Users;

            $cursor = $collection->find();

            foreach ($cursor as $document)
                array_push($result, $document);

            return json_encode($result);
        }
        public function create(array $arr){
        
        }
        public function update(int $id, array $arr){

        }
        public function delete(int $id){
        }
    }