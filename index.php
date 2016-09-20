<?php

require "functions.php";
require 'tempate.php';

class Task{
    public function __construct($a, $b, $c){
        echo $a."</br>";
        echo $b."</br>";
        echo $c."</br>";

    }

}

$task = new Task("asd","asd","asd");
$task2 = new Task;
$task3 = new Task;

var_dump($task);

