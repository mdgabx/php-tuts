<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";


// require base_path("Database.php");
// require base_path("Response.php");

spl_autoload_register(function ($class) {
    // Core\Database

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    
    require base_path("{$class}.php");
});


// require base_path("Core/Router.php");

$router = new \Core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

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
