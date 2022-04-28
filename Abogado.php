<?php

namespace App\Model;

class Abogado
{
    public $nombre = "";
    public $movil = "";
    public $peso = "";

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

    //peso
    public function __construct($pes)
    {
       $this->establecerPeso();
    }

    public function obtenerPeso()
    {
        return $this->peso;
    }

    public function establecerPeso($pes)
    {
        $this->peso = $pes;
    }
}