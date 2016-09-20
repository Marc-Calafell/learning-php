<?php
require "functions.php";
require 'tempate.php';
require 'Task.php';


$pdo = connect();
$tasks = allTasks($pdo);
//$tasks = Task::all();
//
require 'tempate.php';