<?php

require('Validator.php');

$config = require("config.php");
$db = new Database($config["database"]);

$heading = "Create Note";

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $errors = [];

    // $validator = new Validator();

    if(!Validator::string($_POST['body'], 1, 500))
    {
        $errors['body'] = "The body can not be more than 500 characters";
    }

    if(empty($errors))
    {
        $db->query("INSERT INTO notesapp.notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 1
       ]);
    }

  
}

require 'views/note-create.view.php';