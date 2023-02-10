<?php include 'includes/header.php';

// declarando variables en php  
$nombre = "juan";
$_nombre = "juan";
$nombre_= "juan";

// imprimir
echo $nombre;
var_dump($nombre);

// constante
define('constante',"Este valor es constante");
echo constante;          

const constante2 = "Hola 2";
echo constante2 ;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';