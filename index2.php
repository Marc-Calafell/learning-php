<?php

require "bootstrap.php";

$tasks = $query ->all('Persons');

//DRY: Don't repeat yourself
//WET: Write Everything Twice



require 'persons.php';