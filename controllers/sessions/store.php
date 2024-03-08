<?php

use Core\Database;
use Core\App;
use Core\Validator;


$email = $_POST['email'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide an email address";
}

if (!Validator::string($password)) {
    $errors['password'] = "Please provide a valid password";
}

if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors'=> $errors,
    ]);
}   

$user = $db->query('SELECT * FROM users', [
    'email'=> $email
])->find();

dd($users);

login([
    "email" => $email,
    "user" => $user
]);