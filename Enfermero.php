<?php

namespace App\Model;

class Enfermero
{
    public $nombre = "";
    public $movil = "";
    public $dni = "";

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

    //dni
    public function __construct($dn)
    {
       $this->establecerDni();
    }

    public function obtenerDni()
    {
        return $this->dni;
    }

    public function estableceDni($dn)
    {
        $this->dni = $dn;
    }
}