<?php   
    class Database extends PDO {
        public function __construct(string $dsn, $username, $password, $options = [] )
        {
            parent::__construct($dsn, $username, $password);
        }
        public function run() {
            return "";
        }
    }
?>