<?php



use lib\Router;

use lib\Request;



require 'core/bootstrap.php';



$route = Router::load('routes.php')->direct(Request::uri(), Request::method());



require $route['uri'];

$class = new $route['class'];



$function = $route['function'];



if (!Request::ajax())

{

    // Load the HTML header

        require 'views/include/header.php';
        require 'views/include/navbar.php';



            // Inject code from contho $class->$function();
            
            <div id="page-wrapper">
                <div class="header"> 
                                <h1 class="page-header">
                                    Dashboard <small>Vacaturebank</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li class="active">Data</li>
                                </ol> 
                                            
                </div>
            <div id="page-inner">
                <p>frontpage</p> 
            </div>
            <!-- /. PAGE INNER  -->



                // Close it with the bottom end </body> and </html> tags

                    require 'views/include/footer.php';

                    } else {

                        echo $class->$function();

                        }