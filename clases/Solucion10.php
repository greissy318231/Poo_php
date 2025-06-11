<?php
class ContarVocales
{
    public $texto;

    public function contar()
    {
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;
        $textoMinuscula = strtolower($this->texto);

        for ($i = 0; $i < strlen($textoMinuscula); $i++) {
            if (in_array($textoMinuscula[$i], $vocales)) {
                $contador++;
            }
        }
        return $contador;
    }
}
?>