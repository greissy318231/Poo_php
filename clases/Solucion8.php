<?php
class NumeroPerfecto
{
    public $valor;

    public function esPerfecto()
    {
        $suma = 0;
        for ($i = 1; $i < $this->valor; $i++) {
            if ($this->valor % $i == 0) {
                $suma += $i;
            }
        }
        return $suma == $this->valor;
    }
}
?>