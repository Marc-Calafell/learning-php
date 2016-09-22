<?php

//require "core/bootstrap.php";


//$tasks = $query ->all('todos');

//DRY: Don't repeat yourself
//WET: Write Everything Twice

//MVC: Model vista controlador

$routes=[
    'about' => 'controlers/about.php',
    'contact' => 'controlers/contact.php',
    'persons' => 'controlers/persons.php',
    'task' => 'controlers/tempate.php'
];

$uri=(trim($_SERVER['REQUEST_URI'],'/'));

if(array_key_exists($uri,$routes)){

}else {
    throw new Exception("ERROR: no s'ha trobat la ruta");
}


//require 'controlers/tempate.php';