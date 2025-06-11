<?php

class InversionPalabra
{

    public $palabra;
    public $inversion;


    public function _realizar()
    {

        $this->inversion = strrev($this->palabra);
        return "La palabra Invertida se lee así : " . $this->inversion;

    }
}




?>