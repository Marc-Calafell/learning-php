<?php
require "bootstrap.php";
$tasks = $query ->all('todos');

//DRY: Don't repeat yourself
//WET: Write Everything Twice



require 'tempate.php';