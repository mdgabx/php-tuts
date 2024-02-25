<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "functions.php";


// require base_path("Database.php");
// require base_path("Response.php");

spl_autoload_register(function ($class) {
    require base_path("core/{$class}.php");
});


require base_path("router.php");


// $id = $_GET["id"];
// $query = "SELECT * FROM posts where id = :id";

// $posts = $db->query($query, [":id" => $id])->fetch();

// echo $posts["title"];

// foreach ($posts as $post) {
//   echo "<li>" . $post["title"] . "</li>";
// }

// dd($posts);


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
