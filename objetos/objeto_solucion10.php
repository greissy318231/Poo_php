<?php
require_once("../clases/Solucion10.php");

$vocales = new ContarVocales();
$vocales->texto = $_POST['texto'] ?? '';

if (isset($_POST['btn_vocales'])) {
    $cuenta = $vocales->contar();
    echo "El texto contiene {$cuenta} vocales.";
    echo '<br><br> <br>';
    echo '<a href="../solucion10.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';


}
?>