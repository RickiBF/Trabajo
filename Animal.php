<?php

namespace App\Model;

class Animal
{
    public $color = "";
    public $genero = "";
    public $nombre = "";

    //color
    public function __construct($col)
    {
       $this->establecerColor();
    }

    public function obtenerColor()
    {
        return $this->color;
    }

    public function establecerColor($col)
    {
        $this->color = $col;
    }

    //genero
    public function __construct($gen)
    {
       $this->establecerGenero();
    }

    public function obtenerGenero()
    {
        return $this->genero;
    }

    public function establecerEmail($gen)
    {
        $this->genero = $gen;
    }

    //nombre
    public function __construct($nom)
    {
       $this->establecerNombre();
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerMarca($nom)
    {
        $this->nombre = $nom;
    }
}