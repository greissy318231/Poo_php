<?php
require_once("../clases/Solucion7.php");

$resultado_factorial = new Factorial();


$resultado_factorial->numero = $_POST['numero'];


if (isset($_POST['btn_factorial'])) {

    echo $resultado_factorial->calculo_factorial();
    /// hacemos que leea el resultado de la palabra y realice la accion 

    echo '<br><br> <br>';
    echo '<a href="../solucion7.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';

}




?>