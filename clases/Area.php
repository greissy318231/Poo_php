<?php
// primero creamos la clase 

class Area
{
    //Creamos nuestros atributos 
    public $base;
    public $altura;
    public $multiplicacion;
    public $resultado;
    // Creamos nuestros metodos (Acciones)

    public function primer_calculo()
    {
        $this->multiplicacion = $this->base * $this->altura;
    }

    public function area_calculo()
    {

        return "El area del triangulo es: " . $this->resultado = $this->multiplicacion / 2;
        // colocar el retunr para que imprima si no no mostrara nada  //
    }

}
//siguiente paso crear el objeto que tomara estos datos

?>