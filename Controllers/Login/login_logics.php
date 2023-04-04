<?php

$name = $_POST['usernames'];
$password = $_POST['passwords'];

// check whether the user exists or not
// if exists, create a session for him and redirect to '/'(home).
// if not, throw an error.

if ($name && $password) {
    $stmts = $app['db']->query("SELECT * FROM login WHERE username='$name' and password='$password'");
    $exists = $stmts->fetchAll();

    if ($exists) {
        $_SESSION['name'] = [
            'username' => $name
        ];
        // echo "<script>alert('thanks for coming')</script>";
        header('Location: /home');
    }
    else{
        header('Location: /login');
    }
}


?>