<?php include 'includes/header.php';

// declarando variables en php  
$nombre = "juan";
$apellido = "manuel";
$_nombre = "juan";
$nombre_= "juan";

// imprimir
echo $nombre;
var_dump($nombre);// obtendremos mas informacion de la variable

// constante => su  valor no cambia
define('constante',"Este valor es constante");
echo constante;          

// la menos habitual de definir constante
const constante2 = "Hola 2";
echo constante2 ;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";//forma mas habitual  en php

include 'includes/footer.php';