<?php
    class Recipe implements DatabaseOperations {
        protected Database $database;
        protected $data;

        private function validateID() {
            
        }

        public function create(array $values)
        {
            
        }

        public function findOne(int $id)
        {
            
        }

        public function findMultiple(int $limit)
        {
            
        }

        public function update(int $id, array $values)
        {
            
        }

        public function delete(int $id)
        {
            
        }

        public function __construct(Database $database)
        {
            $this->database = $database;            
        }
    }
?>