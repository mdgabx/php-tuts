<?php 

// comment to our mysql database

class Database
{
  // property

  public $connection;

  public function __construct()
  {

    // dd("test");
    $dsn = "mysql:host=127.0.0.2;port=3006;dbname=myapp;charset=utf8mb4";
    $username = "root";
    $password = "secret";

    $this->connection = new PDO($dsn, $username, $password);
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