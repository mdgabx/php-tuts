<?php
require("functions.php");
#require("router.php");
require("Database.php");

$config = require("config.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

// echo $posts["title"];

// foreach ($posts as $post) {
//   echo "<li>" . $post["title"] . "</li>";
// }

dd($posts);


// db connection string


// Output the posts
// dd($posts);

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
