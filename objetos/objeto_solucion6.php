<?php
require_once("../clases/Solucion6.php");

$resultado_palabra = new InversionPalabra();


$resultado_palabra->palabra = $_POST['palabra'];


if (isset($_POST['btn_palabra'])) {

    echo $resultado_palabra->_realizar();

    echo '<br> <br> <br>';
    echo '<a href="../solucion6.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';
    /// hacemos que leea el resultado de la palabra y realice la accion 

}




?>