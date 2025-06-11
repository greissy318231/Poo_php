<?php
require_once("../clases/Promedios.php"); // Aqui crearemos el objeto en base a las caractericias y acciones que  creamos en la clase por eso se enlaza 


$objetopromedio = new Promedios();

$objetopromedio->nota1 = $_POST["nota_1"]; //el  objeto tomara la informacion ingresada en mi formulario de mi input 
$objetopromedio->nota2 = $_POST["nota_2"];
$objetopromedio->nota3 = $_POST["nota_3"];

// ahora los botones de accion, osea los que haran que la accion asignada en la clase se ejectute

if (isset($_POST["btn_calcular"])) {
    $objetopromedio->sumar(); // llamo a suma para quela suma se ejecure primero y asi poder tener un valor para dividir y sacar el promedio  
    echo $objetopromedio->promediacion();
    //cuando se presione el boton se tomaran los valores del input, pasara por las clases y luego ejecutura la acciones asignadas funcion promedio que es la funcion final 
    echo '<br><br> <br>';
    echo '<a href="../calcular_area.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';

}


?>