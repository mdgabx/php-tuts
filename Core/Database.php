<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = "root", $password = "secret")
    {
        // dd("test");
        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        // Set PDO error mode to exceptions
        //  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        // return $statement;
        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }


    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}


