<?php
class NumeroPrimo
{
    public $valor;

    public function esPrimo()
    {
        if ($this->valor < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($this->valor); $i++) {
            if ($this->valor % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
?>