<?php

require("functions.php");

#require("router.php");

// comment to our mysql database

// db connection string

$dsn = "mysql:host=127.0.0.2;port=3006;dbname=myapp;charset=utf8mb4";
$username = "root";
$password = "secret";

    $pdo = new PDO($dsn, $username, $password);
    // Set PDO error mode to exceptions
  //  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll();
    
    // Output the posts
    dd($posts);



// class Person
// {
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name . " breathing";
//     }
// }

// $person = new Person();

// $person->name = 'john Doe';
// $person->age = 23;

// // dd($person->name);
// $person->breathe();
