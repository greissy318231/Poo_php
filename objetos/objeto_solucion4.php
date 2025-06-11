<?php
require_once("../clases/Solucion4.php");


$comparador_numeros = new NumeroMayor();

$comparador_numeros->numero_1 = $_POST['numero_1'];
$comparador_numeros->numero_2 = $_POST['numero_2'];
$comparador_numeros->numero_3 = $_POST['numero_3'];




if (isset($_POST['btn_calcular_numero'])) {
    // ahora haremos que al momento de clickear se ejecute toda la receta del clase solucion y poder ver el resultado final en pantalla

    echo '<p style="color:#000080">' . $comparador_numeros->encontrar_el_mayor() . '</p>';

    echo '<br>';
    echo '<a href="../solucion4.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';
}
?>