<?php

namespace App\Model;

class Jugador
{
    public $talla = "";
    public $peso = "";
    public $fuerza = "";

    //talla
    public function __construct($tall)
    {
       $this->establecerTalla();
    }

    public function obtenerTalla()
    {
        return $this->talla;
    }

    public function establecerTalla($tall)
    {
        $this->talla = $tall;
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

    public function establecerMovil($pes)
    {
        $this->peso = $pes;
    }

    //fuerza
    public function __construct($fue)
    {
       $this->establecerFuerza);
    }

    public function obtenerFuerza()
    {
        return $this->fuerza;
    }

    public function establecerFuerza($fue)
    {
        $this->fuerza = $fue;
    }
}