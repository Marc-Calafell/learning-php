<?php
require "functions.php";
require 'tempate.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/queryBuilder.php';

$config = [
    "type" => "mysql",
    "host" => "127.0.0.1",
    "name" => "TODO",
    "username" => "root",
    "passwd" => ""

];

$pdo = connection::make($config);
$query = new queryBuilder($pdo);
$tasks = $query ->all('todos');
//$Connection = new Connection();


require 'tempate.php';