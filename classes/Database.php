<?php   
    class Database extends PDO {
        public function __construct(string $dsn, string $username, string $password)
        {
            parent::__construct($dsn, $username, $password);
        }

        public function run(string $sql, array $arguments = [])
        {
            $statement = $this->prepare($sql);
            $statement->execute($arguments);
            return $statement;           
        }
    }
?>