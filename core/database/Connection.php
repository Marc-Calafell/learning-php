<?php

namespace Marccalafell;

/**
 * Class Connection
 */
class Connection
{

    /**
     * @return PDO
     */
    public static function make($config,$message) {

        try {
            $pdo = new PDO(
                $config['type'] . ':host='.
                $config['host'] . ';dbname=' .
                $config['name'],
                $config['username'],
                $config['passwd']);

            return $pdo;
        } catch (PDOException $e) {
            die( $message['dberror'] . $e->getMessage());
        }
    }


}