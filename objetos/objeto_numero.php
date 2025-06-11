<?php

require_once("../clases/NumerosParImpar.php");

//Creacion de objeto  

$Verificaciones_numero = new Numeros();

$Verificaciones_numero->par_impar = (int) $_POST['numero'];

// Verificar si el botón de envío fue presionado
if (isset($_POST['btn_verificar_numero'])) {

    //Creamos otro IF para identificar las dos posibles opciones
    if ($Verificaciones_numero->par_impar % 2 == 0) {
        echo $Verificaciones_numero->verificacion() . '<span style="color: green; font-weight: bold;"> Par </span>';

    } else {
        echo $Verificaciones_numero->verificacion() . '<span style="color: red; font-weight: bold;"> Impar </span>';

    }

    //AQUÍ ES DONDE AGREGAMOS EL BOTÓN "VOLVER"
    echo '<br><br><br>';
    echo '<a href="../numero_par_impar.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';

}







?>