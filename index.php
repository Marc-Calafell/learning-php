<?php

include "functions.php";

hola();
mostra("hola");
hellow("Marc","Calafell","Gisbert",12);
hellow("Marc","Calafell","",12);
echo suma(1,2,3,4,5,6,7,8,9,0,123,123,123,123,123,123,123,12);
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





require 'tempate.php';