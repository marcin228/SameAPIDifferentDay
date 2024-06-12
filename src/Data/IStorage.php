<?php

    namespace src\data;
    interface IStorage{
        public function getOne(int $id);
        public function getAll();
        public function create(array $arr);
        public function update(int $id, array $arr);
        public function delete(int $id);
    }