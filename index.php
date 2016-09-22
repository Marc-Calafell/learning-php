<?php

require "core/bootstrap.php";


$tasks = $query ->all('todos');

//DRY: Don't repeat yourself
//WET: Write Everything Twice

//MVC: Model vista controlador

require 'tempate.php';