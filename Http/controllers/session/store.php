<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }

    $form->error('email', 'No matching account found for that email address and password.');
}

// $_SESSIONS['_flash']['errors'] = $form->errors();
Session::flash('errors', $form->errors());
Session::flash('old', [
    "email" => $_POST["email"]
]);

return redirect('/login');

// return view('session/create.view.php', [
//     'errors' => $form->errors()
// ]);
