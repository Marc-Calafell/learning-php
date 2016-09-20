<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 20/09/16
 * Time: 21:22
 */
class Connection
{
    public static function make()
    {

        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=TODO', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            die("Ha succeït un error durant la connexió. Missatge: " . $e->getMessage());
        }
    }


}