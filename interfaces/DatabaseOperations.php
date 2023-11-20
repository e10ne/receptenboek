<?php
    interface DatabaseOperations {
        public function create(array $values);
        public function read(int $id);
        public function update(int $id, array $values);
        public function delete(int $id);
    }
?>