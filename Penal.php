<?php

namespace App\Model;

class Penal
{
    public $tamaño = "";
    public $carceletas = "";
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

    //carceletas
    public function __construct($car)
    {
       $this->establecerCarceletas();
    }

    public function obtenerCarceletas()
    {
        return $this->carceletas;
    }

    public function estableceColor($car)
    {
        $this->carceletas = $car;
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