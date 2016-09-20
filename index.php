<?php

require "functions.php";
require 'tempate.php';
require 'Task.php';
//POPO o POJO
// PLAIN  OLD (Java/Php)OBJECT
$task = new Task("apendre php",false);
$task2 = new Task("apendre java",false);
$task3 = new Task("apendre laravel",false);

var_dump($task);
var_dump2($task);
var_dump3($task);
