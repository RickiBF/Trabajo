<?php

namespace App\Model;

class Ingeniero
{
    public $nombre = "";
    public $edad = "";
    public $telefono = "";

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

    //edad
    public function __construct($ed)
    {
       $this->establecerEdad();
    }

    public function obtenerEdad()
    {
        return $this->edad;
    }

    public function establecerEmail($ed)
    {
        $this->edad = $ed;
    }

    //telefono
    public function __construct($tel)
    {
       $this->establecerTelefono();
    }

    public function obtenerTelefono()
    {
        return $this->telefono;
    }

    public function establecerMarca($ed)
    {
        $this->telefono = $ed;
    }
}