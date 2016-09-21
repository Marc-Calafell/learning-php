<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 20/09/16
 * Time: 21:22
 */
class Connection
{
    public static function make($config, $message)
    {

        try {
            $pdo = new PDO("".
                $config['type']."       :host=".
                $config['host']."       ;dbname=".
                $config['name']."",
                $config['username'],
                $config['passwd']
            );
            return $pdo;
        } catch (PDOException $e) {
            die($message["dberror"]. $e->getMessage());
        }
    }


}