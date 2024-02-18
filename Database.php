<?php

class Database
{
    public $connection;

    public function __construct($config, $username = "root", $password = "secret")
    {
        // dd("test");
        $dsn = "mysql:" . http_build_query($config, "", ";");
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {
        // Set PDO error mode to exceptions
        //  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
