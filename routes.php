<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

if ($middleware->isLoggedIn) {
    $router->get('users', 'App/Controllers/UserController.php@index');
    $router->get('users/update', 'App/Controllers/UserController.php@update');
    $router->post('users/store', 'App/Controllers/UserController.php');
    $router->get('me', 'App/Controllers/ProfileController.php@index');
    $router->get('artists', 'App/Controllers/ArtistController.php@index');
    $router->get('maurice', 'App/Controllers/MauriceController.php@index');
}

$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');

$router->get('login', 'App/Controllers/LoginController.php');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');


