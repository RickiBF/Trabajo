<?php

namespace App\Model;

class Auto
{
    public $color = "";
    public $modelo = "";
    public $marca = "";

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

    //modelo
    public function __construct($mod)
    {
       $this->establecerModelo();
    }

    public function obtenerModelo()
    {
        return $this->modelo;
    }

    public function establecerEmail($mod)
    {
        $this->modelo = $mod;
    }

    //marca
    public function __construct($mar)
    {
       $this->establecerMarca();
    }

    public function obtenerMarca()
    {
        return $this->marca;
    }

    public function establecerMarca($mor)
    {
        $this->marca = $mad;
    }
}