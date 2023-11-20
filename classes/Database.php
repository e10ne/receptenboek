<?php   
    class Database extends PDO {
        public function __construct(string $dsn, $username, $password)
        {
            parent::__construct($dsn, $username, $password);
        }

        public function run(string $sql, $args = null)
        {
            $statement = $this->prepare($sql);
            $statement->execute($args);
            return $statement;           
        }
    }
?>