<?php

class Potencia
{

    public $base;
    public $exponente;

    public $resultado;

    //Creamos la acccion 


    public function _potenciacion()
    {
        $this->resultado = $this->base ** $this->exponente;
        return "La potencia de: " . $this->base . " es: " . $this->resultado;

    }
}


















?>