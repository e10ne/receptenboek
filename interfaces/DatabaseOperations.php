<?php
    interface DatabaseOperations {
        public function create(array $values);
        public function findOne(int $id);
        public function findMultiple(int $limit);
        public function update(int $id, array $values);
        public function delete(int $id);
    }
?>