<?php
require "functions.php";
require 'tempate.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/queryBuilder.php';
//require 'config/database.php';
$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = connection::make($config,$message);
$query = new queryBuilder($pdo);
$tasks = $query ->all('todos');
//$Connection = new Connection();


require 'tempate.php';