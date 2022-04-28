<?php

namespace App\Model;

class Albanil
{
    public $nombre = "";
    public $movil = "";
    public $tamaño = "";

    //nombre
    public function __construct($nom)
    {
       $this->establecerNombre();
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerColor($nom)
    {
        $this->nombre = $nom;
    }

    //movil
    public function __construct($mov)
    {
       $this->establecerMovil();
    }

    public function obtenerMovil()
    {
        return $this->movil;
    }

    public function establecerMovil($mov)
    {
        $this->movil = $mov;
    }

    //tamaño
    public function __construct($tam)
    {
       $this->establecerTamaño();
    }

    public function obtenerTamaño()
    {
        return $this->tamaño;
    }

    public function establecerPeso($tam)
    {
        $this->tamaño = $tam;
    }
}