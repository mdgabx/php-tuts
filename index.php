<?php

require("functions.php");

// dd($_SERVER);

$uri = $_SERVER["REQUEST_URI"];

if ($uri === '/') {
    require("controllers/index.php");
} else if ($uri === '/about') {
    require("controllers/about.php");
} else if ($uri === '/contact'){
    require("controllers/contact.php");
}