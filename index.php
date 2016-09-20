<?php

require "functions.php";
require 'tempate.php';
require 'Task.php';

//POPO o POJO
// PLAIN  OLD (Java/Php)OBJECT
$task = new Task("apendre php",false);
$task2 = new Task("apendre java",false);
$task3 = new Task("apendre laravel",false);
echo"</br>";


var_dump($task);
$task->completed=true;
var_dump($task);
$task->setDescription("tornar a sistemes");
var_dump($task);
