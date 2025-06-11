<?php
require_once("../clases/Area.php");
// lo enlazamos a la clase que pasara la info



// creamos el objeto que ejectura los datos de la clase al idenificar la accion 

$objetoarea = new Area();
$objetoarea->base = $_POST['base'];
$objetoarea->altura = $_POST['altura'];
// ahora haremos que este if llame y ejecute nuestras acciones con los valroes obtenidos
if (isset($_POST['btn_calcular_area'])) {
    //primero llamaremos al primer calculo que es la multiplicacion para que nos de los valores  para divir  y calcular
    $objetoarea->primer_calculo();
    // ahora llamamos a  calculo final que dividira en 2 para que se calule el area 
    echo $objetoarea->area_calculo();
    // esto imprimira el resultado final 
    echo '<br><br> <br>';
    echo '<a href="../calcular_area.html" style="padding: 10px 20px; background-color:rgb(11, 54, 100);  color: white;
    text-decoration: none; border-radius: 5px;  border: 1px solidrgb(12, 24, 37); cursor: pointer; font-weight: bold; margin-top: 15px;">Volver</a>';

}



?>