<?php
require_once("../clases/Solucion5.php");

$total_potencia = new Potencia();

$total_potencia->base = $_POST['base'];
$total_potencia->exponente = $_POST['exponente'];


if (isset($_POST['btn_potencia'])) {

    /// analiza si el boton fue selecionado o no 

    echo '<p style="color:#006400; font-weight:bold;">' . $total_potencia->_potenciacion() . '</p>';

    echo '<br>';
    echo '<a href="../solucion5.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';
}


?>