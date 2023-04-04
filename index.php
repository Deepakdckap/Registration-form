<?php

$app = [];
require 'con.php';
session_start();

$app['db'] = (new Database())->db;

$routes = [
    '/'=>'Controllers/Registration/registration.php',
    '/register'=>'Controllers/Registration/register.php',
    '/login'=>'Controllers/Login/login.php',
    '/login_logics'=>'Controllers/Login/login_logics.php',
    '/home'=>'Controllers/welcome/home.php'     
];

// var_dump($_SERVER);

if (array_key_exists($_SERVER['REQUEST_URI'],$routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
}else{
    http_response_code(404);
}








?>