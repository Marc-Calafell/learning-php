<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 23/09/16
 * Time: 16:00
 */
class router
{
    protected $routes=[];

    public function define($routes){
        $this->routes =$routes;

    }

    public function direct($uri)
    {
        if ( array_key_exists($uri, $this->routes) ) {
            return $this->routes[$uri];
        } else {
            throw new Exception("No s'ha trobat la ruta");
        }
    }

    public static function load($routes){

        $router= new static;
        $router->routes = require $routes;
        var_dump($routes);
        return $router;
    }


}