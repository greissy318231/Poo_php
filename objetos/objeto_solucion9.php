<?php
require_once("../clases/Solucion9.php");

$numero = new NumeroPrimo();
$numero->valor = $_POST['numero'] ?? 0;

if (isset($_POST['btn_primo'])) {
    if ($numero->esPrimo()) {
        echo "El número {$numero->valor} es primo.";
    } else {
        echo "El número {$numero->valor} no es primo.";
    }

    echo '<br><br> <br>';
    echo '<a href="../solucion9.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';

}
?>