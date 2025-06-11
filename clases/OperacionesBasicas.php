<?php


class OperacionesBasicas
{

    public $valor1;
    public $valor2;  //{ Estos son atributos }//
    private $resultado;


    //PRIMER METODO : acciones que haremos dentro de esta clase  

    public function suma()
    {
        $this->resultado = $this->valor1 + $this->valor2;
        return "La suma es: " . $this->resultado;
    }

    public function resta()
    {
        $this->resultado = $this->valor1 - $this->valor2;
        return "La resta es :" . $this->resultado;
    }

    public function multiplicar()
    {
        $this->resultado = $this->valor1 * $this->valor2;
        return "La multiplicaion es: " . $this->resultado;

    }

    public function dividir()
    {
        $this->resultado = $this->valor1 / $this->valor2;
        return "La division es: " . $this->resultado;
    }
}
?>