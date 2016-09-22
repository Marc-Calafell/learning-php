<?php

require "core/bootstrap.php";


$persons = $query ->all('Persons');

//DRY: Don't repeat yourself
//WET: Write Everything Twice



require 'persons.php';