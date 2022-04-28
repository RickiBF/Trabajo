<?php

namespace App\Model;

class Albanil
{
    public $nombre = "";
    public $movil = "";
    public $tamaño = "";

    //nombre
    public function __construct($nom, $mov, $tam)
    {
       $this->establecerNombre();
       $this->establecerMovil();
       $this->establecerTamaño();
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

    public function obtenerTamaño()
    {
        return $this->tamaño;
    }

    public function establecerTamaño$tam)
    {
        $this->tamaño = $tam;
    }
}<?php

namespace App\Model;

class Albanil
{
    public $nombre = "";
    public $movil = "";
    public $tamaño = "";

    //nombre
    public function __construct($nom, $mov, $tam)
    {
       $this->establecerNombre();
       $this->establecerMovil();
       $this->establecerTamaño();
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

    public function obtenerTamaño()
    {
        return $this->tamaño;
    }

    public function establecerTamaño$tam)
    {
        $this->tamaño = $tam;
    }
}
