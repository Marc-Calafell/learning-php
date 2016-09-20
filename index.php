<?php
require "functions.php";
require 'tempate.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/queryBuilder.php';

$pdo = connection::make();
$query = new queryBuilder($pdo);
$tasks = $query ->all('todos');
//$Connection = new Connection();


require 'tempate.php';