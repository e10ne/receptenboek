<?php   
    class Database extends PDO {
        public function __construct(string $dsn, string $username, string $password)
        {
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            parent::__construct($dsn, $username, $password, $options);
        }

        public function run(string $sql, array $arguments = [])
        {
            $statement = $this->prepare($sql);
            $statement->execute($arguments);
            return $statement;           
        }
    }
?>