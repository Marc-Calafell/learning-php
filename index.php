<?php

require "core/bootstrap.php";
require "core/Request.php";
require 'core/router.php';

// poo

//$routes = require "routes.php";
//$uri= Request::uri();
//$router= new router;
//$router->direct($uri);
//$router ->define($routes);

//require $router->direct($uri);

//var_dump( router::load('routes.php'));
require Marccalafell\router::load('routes.php')->direct(Marccalafell\Request::uri());



//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

//    FC Front Controller