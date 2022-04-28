<?php

namespace App\Model;

class Abogado
{
    public $nombre = "";
    public $movil = "";
    public $peso = "";

    //nombre
    public function __construct($nom, $movil, $peso)
    {
       $this->establecerNombre();
       $this->establecerMovil();
       $this->establecerPeso();
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerNombre($nom)
    {
        $this->nombre = $nom;
    }


    public function obtenerMovil()
    {
        return $this->movil;
    }

    public function establecerMovil($mov)
    {
        $this->movil = $mov;
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
