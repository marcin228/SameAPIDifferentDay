<?php
    
    require_once __DIR__ . './../vendor/autoload.php';

    use Src\Controllers\IController;
    use Src\Data\IStorage;

    class Users implements IController{
        private IStorage $storage;
        public function __constructor(IStorage $storage){

            $this->storage = $storage;
        }
        public function getOne(int $id){

            return $this->storage->getOne($id);
        }
        public function getAll(){

            return $this->storage->getAll();
        }
        public function create(array $arr){

            return $this->storage->create($arr);
        }
        public function update(int $id, array $arr){

            return $this->storage->update($id, $arr);
        }
        public function delete(int $id){

            return $this->storage->delete($id);
        }
    }