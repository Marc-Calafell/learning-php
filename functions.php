<?php

function hola(){
    echo"hola";
}



function mostra($text){
    echo $text;
}

function hellow($nom, $cognom1, $cognom2="ASD", $edat){
    echo "Hola $nom $cognom1 $cognom2 amb edat de $edat anys \n";
}


function suma(){
    $numbers = func_get_args();

    return array_sum($numbers);

}