<?php

$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');

$router->get('login', 'App/Controllers/LoginController.php');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');

$router->get('me', 'App/Controllers/ProfileController.php@index');

$router->get('users', 'App/Controllers/UserController.php@index');
$router->post('users/store', 'App/Controllers/UserController.php');

$router->get('artists', 'App/Controllers/ArtistController.php@index');
