<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 20/09/16
 * Time: 21:33
 */

class contract {
    /**
     * contract constructor.
     */
    public function __construct($arquitece, )
    {
    }

    public function builtHome(){
        $this->arquitectes->dissenyar();
        $this->paleta->construir();
        $this->electricista->enchufar();

    }

}



class queryBuilder
{
           //Dependencies de la classe --> dependency injection

    public $pdo;

    /**
     * queryBuilder constructor.
     * @param $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    //type hinting
    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }
}