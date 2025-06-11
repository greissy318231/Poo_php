<?php

//Primero asignaremos la clase con la que trabajaremos la cual nos ayudara  a definir nuestro objeto despues 

class Promedios
{
    // Le asignamos sus atributos oseas  los valores de la clase 

    public $nota1;
    public $nota2;
    public $nota3;

    public $sumadenotas;
    public $promedio;


    // Creamos nuestros metodos osea las acciones que  la clase realizara 

    public function sumar()
    {
        $this->sumadenotas = $this->nota1 + $this->nota2 + $this->nota3;
    }

    public function promediacion()
    {
        $this->promedio = $this->sumadenotas / 3;
        return "Su Promedio es: " . $this->promedio;
    }




}



?>