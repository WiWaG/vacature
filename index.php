<?php

use app\lib\Router;
use app\lib\Request;

require 'core/bootstrap.php';

$route = Router::load('routes.php')->direct(Request::uri(), Request::method());

require $route['uri'];

$class = new $route['class'];

$function = $route['function'];


if (!Request::ajax()) {

        echo $class->$function();

} 
