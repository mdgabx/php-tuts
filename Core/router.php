<?php

$routes = require base_path('routes.php');


// if ($uri === '/') {
//     require("controllers/index.php");
// } else if ($uri === '/about') {
//     require("controllers/about.php");
// } else if ($uri === '/contact'){
//     require("controllers/contact.php");
// }




function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}


function uriToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
uriToController($uri, $routes);