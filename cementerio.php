<?php

namespace App\Model;

class Cementerio
{
    public $tamaño = "";
    public $tipo = "";
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

    //tipo
    public function __construct($tip)
    {
       $this->establecerTipo();
    }

    public function obtenerTipo()
    {
        return $this->tipo;
    }

    public function establecerTipo($tip)
    {
        $this->tipo = $tip;
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