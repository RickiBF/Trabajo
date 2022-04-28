<?php

namespace App\Model;

class Hospital
{
    public $tamaño = "";
    public $color = "";
    public $ubicacion = "";

    //nombre
    public function __construct($tam)
    {
       $this->establecerTamaño();
    }

    public function obtenerTamaño()
    {
        return $this->tamaño;
    }

    public function establecerTamaño($tam)
    {
        $this->tamaño = $tam;
    }

    //color
    public function __construct($col)
    {
       $this->establecerColor();
    }

    public function obtenerColor()
    {
        return $this->color;
    }

    public function estableceColor($col)
    {
        $this->color = $col;
    }

    //ubicacion
    public function __construct($ubi)
    {
       $this->establecerUbicacion();
    }

    public function obtenerUbicacion()
    {
        return $this->ubicacion;
    }

    public function establecerUbicacion($ubi)
    {
        $this->ubicacion = $ubi;
    }
}