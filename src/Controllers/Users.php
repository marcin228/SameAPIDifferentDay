<?php

    namespace sameApiDifferentDay\controllers;

    use sameApiDifferentDay\controllers\IController;

    class Users implements IController{
        private IController $storage;
        public function __construct(IController $storage){

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