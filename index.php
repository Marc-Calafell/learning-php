<?php
require "functions.php";
require 'tempate.php';
require 'Task.php';
require 'database/Connection.php';

$pdo = connection::make();
$tasks = allTasks($pdo);
//$tasks = Task::all();
//
$Connection = new Connection();


require 'tempate.php';