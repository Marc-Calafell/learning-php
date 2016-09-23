<?php

require "core/bootstrap.php";

require 'routes.php';

require "core/Request.php";

// poo

Request::uri();



if ( array_key_exists($uri,$routes) ) {
    require $routes[$uri];
} else {
    throw new Exception("No s'ha trobat la ruta");
}

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

//    FC Front Controller