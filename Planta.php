<?php

namespace App\Model;

class Planta
{
    public $forma = "";
    public $textura = "";
    public $fruto = "";

    //forma
    public function __construct($form)
    {
       $this->establecerForma();
    }

    public function obtenerForma()
    {
        return $this->forma;
    }

    public function establecerColor($form)
    {
        $this->forma = $form;
    }

    //textura
    public function __construct($tex)
    {
       $this->establecerTextura();
    }

    public function obtenerTextura()
    {
        return $this->textura;
    }

    public function establecerEmail($tex)
    {
        $this->textura = $tex;
    }

    //fruto
    public function __construct(fru)
    {
       $this->establecerFruta();
    }

    public function obtenerFruta()
    {
        return $this->fruta;
    }

    public function establecerMarca($fru)
    {
        $this->fruta = $fru;
    }
}