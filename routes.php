<?php

use middleware\WhenNotLoggedin as Auth;

$router->get('', 'controllers/HomeController.php@index');
$router->get('home', 'controllers/HomeController.php');
$router->get('ui-elements', 'controllers/UielementsController.php@index');



$router->get('admin', 'controllers/AdminController.php@index', Auth::class);
$router->get('super-admin', 'controllers/AdminController.php', Auth::class);
$router->get('users', 'controllers/UserController.php@index');
$router->get('users/update', 'controllers/UserController.php@update');
$router->get('users/edit', 'controllers/UserController.php@edit');
$router->post('users/store', 'controllers/UserController.php');
$router->get('me', 'controllers/ProfileController.php@index');
$router->get('artists', 'controllers/ArtistController.php@index');
$router->get('artists/detail', 'controllers/ArtistController.php@show');
$router->get('login', 'controllers/LoginController.php@index');
$router->get('logout', 'controllers/LoginController.php@logout');
$router->post('login/auth', 'controllers/LoginController.php@login');
$router->get('contact', 'controllers/ContactController.php@index');
$router->get('register', 'controllers/RegisterController.php@index');
$router->post('register', 'controllers/RegisterController.php@store');