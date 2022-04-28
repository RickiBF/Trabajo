<?php

namespace App\Model;

class Escritor
{
    public $nombre = "";
    public $especialidad = "";
    public $edad = "";

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

    //especialidad
    public function __construct($esp)
    {
       $this->establecerEspecialidad();
    }

    public function obtenerEspecialidad()
    {
        return $this->especialidad;
    }

    public function establecerEspecialidad($esp)
    {
        $this->especialidad = $esp;
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

    public function establecerPeso($ed)
    {
        $this->edad = $ed;
    }
}