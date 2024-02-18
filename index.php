<?php

require("functions.php");
#require("router.php");
require("Database.php");

$db = new Database();
$posts = $db->query("SELECT * FROM posts where id = 1;")->fetch(PDO::FETCH_ASSOC);

echo $posts["title"];

foreach ($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}



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
