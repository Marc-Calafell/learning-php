<?php

require "functions.php";
require 'tempate.php';

class Task{

    public $description;

    public function __construct($description){
        $this->description = $description;

    }

}

$task = new Task("apendre php");
$task2 = new Task("asds");
$task3 = new Task("asdasdasd");

var_dump($task);

