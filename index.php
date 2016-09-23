<?php

require "core/bootstrap.php";

require 'core/router.php';

require "core/Request.php";

// poo

$routes = require "routes.php";
//$uri= Request::uri();
//$router= new router;
//$router->direct($uri);
//$router ->define($routes);

//require $router->direct($uri);

require router::load('routes.php')-> direct(Request::uri());

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

//    FC Front Controller