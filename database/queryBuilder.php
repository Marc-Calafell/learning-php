<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 20/09/16
 * Time: 21:33
 */
class queryBuilder
{
    function all($pdo, $table)
    {
        $query = $pdo->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }
}