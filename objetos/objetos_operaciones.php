>
<?php
require_once("../clases/OperacionesBasicas.php"); // requiero el archivo que definaria quien sera mi objeto// 
//Crear un objeto es crear un elemento de una clase especifica. //



//Creo que el objeto desde la clase Operaciones basicas, es del tipo de la clase creada
$operaciones = new OperacionesBasicas();

$operaciones->valor1 = $_POST['txt_valor1'];
$operaciones->valor2 = $_POST['txt_valor2'];

if (isset($_POST['btn_suma'])) {
    echo $operaciones->suma();
} elseif
(isset($_POST['btn_resta'])) {
    echo $operaciones->resta();
} elseif (isset($_POST['btn_multi'])) {
    echo $operaciones->multiplicar();
} elseif (isset($_POST['btn_div'])) {
    echo $operaciones->dividir();
}
// atreves del metodo post le digo el valor de mis inputs// 


?>