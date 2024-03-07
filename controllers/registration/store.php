<?php

use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide an email address";
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Please provide a password at least 7 characters";
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors'=> $errors,
    ]);
}   


$db = App::resolve(Database::class);


$user = $db->query('select * from users where email = :email', [
    'email'=> $email
])->find();

if ($user) {
    header("location: /");
    exit();
} else {
    $db->query('INSERT INTO notesapp.users (password, email) VALUES(:password, :email)', [
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'email' => $email
    ]);


    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}