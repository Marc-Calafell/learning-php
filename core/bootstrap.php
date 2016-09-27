<?php

require 'functions.php';
require 'Models/Task.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = Marccalafell\Connection::make($config,$message);
$query = new QueryBuilder($pdo);


