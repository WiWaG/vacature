<?php



use lib\Router;

use lib\Request;



require 'Core/bootstrap.php';



$route = Router::load('routes.php')->direct(Request::uri(), Request::method());



require $route['uri'];

$class = new $route['class'];



$function = $route['function'];



if (!Request::ajax())

{

    // Load the HTML header

        require 'views/layouts/head.view.php';



            // Inject code from contho $class->$function();



                // Close it with the bottom end </body> and </html> tags

                    require 'views/layouts/bottom.view.php';

                    } else {

                        echo $class->$function();

                        }