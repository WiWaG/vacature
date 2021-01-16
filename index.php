<?php

// Turn on all errors, warnings and notifications at the top of this app
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require 'core/core.php';

// Throw all errors to a central error handler function
// This function is in core/core.php file
// set_exception_handler('exception_handler');

use app\lib\Router;
use app\lib\Request;

require 'core/bootstrap.php';

$route = Router::load('routes.php')->direct(Request::uri(), Request::method());

require $route['uri'];

$class = new $route['class'];

$function = $route['function'];


if (!Request::ajax())

{

        // Load the HTML header

        require 'views/partials/header.view.php';
        require 'views/partials/navbar.view.php';


        // Inject code from contho $class->$function();
                    
            
        // Close it with the bottom end </body> and </html> tags

        require 'views/partials/footer.view.php';

} 
                    else {

                        echo $class->$function();

                        }