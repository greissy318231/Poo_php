<?php

class Factorial
{
    public $numero;
    public $resultado = 1;

    public function calculo_factorial()
    {
        for ($i = $this->numero; $i >= 1; $i--) {
            $this->resultado = $this->resultado * $i;
        }
        return "El Factorial es " . $this->resultado;
    }
}

?>