<?php

$routes = require('routes.php');


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

    require("views/{$code}.php");

    die();
}


function uriToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort();
    }
}


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
uriToController($uri, $routes);