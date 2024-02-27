<?php

use Core\Validator;
use Core\Database;

$config = require base_path("config.php");
$db = new Database($config["database"]);

$errors = [];
// $validator = new Validator();

if (!Validator::string($_POST['body'], 1, 500)) {
    $errors['body'] = "The body can not be more than 500 characters";
}

if (empty($errors)) {
    $db->query("INSERT INTO notesapp.notes (body, user_id) VALUES (:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}
