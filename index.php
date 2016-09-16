<?php

include "functions.php";

hola();
mostra("hola");
hellow("Marc","Calafell","Gisbert",12);
hellow("Marc","Calafell","",12);

//$hola="hola,". $_GET['nom'];

//array
$noms= array(
    'asd',
    'asd',
    'asd');

//array associatiu
$persona= [
    'nom' => 'Marc',
    'sn1' => 'Calafell',
    'sn2' => 'Gisbert',
    'edat'=> 21,
    'married'=> false
];
/*
if($persona['married']== true){
    echo "si";
} else {
    echo "no";
}
*/





//require 'tempate.php';