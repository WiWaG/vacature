<?php

// use app\middleware\WhenNotLoggedin as Auth;

$router->get('', 'app/controllers/HomeController.php@index');
$router->get('home', 'app/controllers/HomeController.php');
$router->get('bedrijven', 'app/controllers/BedrijvenController.php@index');



// $router->get('admin', 'app/controllers/AdminController.php@index', Auth::class);
// $router->get('super-admin', 'app/controllers/AdminController.php', Auth::class);
// $router->get('users', 'app/controllers/UserController.php@index');
// $router->get('users/update', 'app/controllers/UserController.php@update');
// $router->get('users/edit', 'app/controllers/UserController.php@edit');
// $router->post('users/store', 'app/controllers/UserController.php');
// $router->get('me', 'app/controllers/ProfileController.php@index');
// $router->get('artists', 'app/controllers/ArtistController.php@index');
// $router->get('artists/detail', 'app/controllers/ArtistController.php@show');
// $router->get('login', 'app/controllers/LoginController.php@index');
// $router->get('logout', 'app/controllers/LoginController.php@logout');
// $router->post('login/auth', 'app/controllers/LoginController.php@login');
// $router->get('contact', 'app/controllers/ContactController.php@index');
// $router->get('register', 'app/controllers/RegisterController.php@index');
// $router->post('register', 'app/controllers/RegisterController.php@store');