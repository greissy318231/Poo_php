<?php

class NumeroMayor
{
    public $numero_1;
    public $numero_2;
    public $numero_3;
    public $numero_mayor_hasta_ahora;

    // Acciones  

    public function encontrar_el_mayor()
    {

        // por el momento nuestro numero mayor es el  1 luego haremos las demas comparaciones 
        $this->numero_mayor_hasta_ahora = $this->numero_1;
        // hacemos la primera  comparacion 
        if ($this->numero_2 > $this->numero_mayor_hasta_ahora)//osea 1
        {
            $this->numero_mayor_hasta_ahora = $this->numero_2;
            // ahora nuestro numero mayor puede ser el 2  solo si es mayor que uno este se ejecutara

            //hacemos la tercera comparacion : D 
        }
        if ($this->numero_3 > $this->numero_mayor_hasta_ahora) { // solo se ejectura si es mayor que el numero 2 
            $this->numero_mayor_hasta_ahora = $this->numero_3;
        } // aca finaliza mi if osea mis acciones 

        return "El numero Mayor es : " . $this->numero_mayor_hasta_ahora;


    }




}




?>