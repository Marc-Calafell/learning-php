<?php

/**
 * Created by PhpStorm.
 * User: mark
 * Date: 20/09/16
 * Time: 18:19
 */
class Person
{
    public $nom;
    public $cognom1;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCognom1()
    {
        return $this->cognom1;
    }

    /**
     * @param mixed $cognom1
     */
    public function setCognom1($cognom1)
    {
        $this->cognom1 = $cognom1;
    }

    /**
     * @return mixed
     */
    public function getCognom2()
    {
        return $this->cognom2;
    }

    /**
     * @param mixed $cognom2
     */
    public function setCognom2($cognom2)
    {
        $this->cognom2 = $cognom2;
    }
    public $cognom2;

    /**
     * Person constructor.
     * @param $nom
     * @param $cognom1
     * @param $cognom2
     */
    public function __construct($nom, $cognom1, $cognom2)
    {
        $this->nom = $nom;
        $this->cognom1 = $cognom1;
        $this->cognom2 = $cognom2;
    }
}