<?php
require_once("../clases/Solucion8.php");

$numero = new NumeroPerfecto();
$numero->valor = $_POST['numero'] ?? 0;

if (isset($_POST['btn_perfecto'])) {
    if ($numero->esPerfecto()) {
        echo "El número {$numero->valor} es perfecto.";
    } else {
        echo "El número {$numero->valor} no es perfecto.";
    }

    echo '<br><br> <br>';
    echo '<a href="../solucion8.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';

}
?>