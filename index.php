<?php

require "functions.php";
require 'tempate.php';
require 'Task.php';

echo "hola</br>";

// llibreria PDO: Php Data Objects
$pdo = new PDO('mysql:host=127.0.0.1;dbname=TODO','root','');


try{


} catch (PDOException $e){

    die("ERROR: $e->getMessage()");

}

$query=$pdo->prepare("SELECT * FROM todos");
$query->execute();
//var_dump($query->fetchAll(PDO::FETCH_OBJ));
//var_dump($query->fetchAll(PDO::FETCH_OBJ)[0]->id);
//var_dump($query->fetchAll(PDO::FETCH_OBJ)[1]->description);
$resultat=$query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,Task::class);

$task1=$resultat[1];
var_dump($task1->id);
var_dump($resultat[0]->id);

var_dump($task1->description);
var_dump($task1->complete);
//require 'index.tempate.php';