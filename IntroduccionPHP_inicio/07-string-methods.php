<?php include 'includes/header.php';

//FUNCIONES DE PHP 
$nombreCliente = "Albert Manuel";

// Conocer la extension de un string
echo strlen($nombreCliente)."<br>";
// nos da informacion sobre la variable
var_dump($nombreCliente);

// Eliminar espacios en blanco 
// tanto en el inicio como en el final con trim
echo "<br>eliminar espacios en blanco<br>";

$texto = trim($nombreCliente);
echo strlen($texto)."<br>";

// Convertirlo a mayusculas 
echo strtoupper($nombreCliente);

// convertir a minusculas
// util para registrarlo en mails todo pasarlo a minuscula
echo strtolower($nombreCliente)."<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

// cambiar de caracter o reemplazar una palabra
echo str_replace('Albert','A',$nombreCliente);

// revisar si un string existe o no 
echo strpos($nombreCliente, 'A');

// 

$tipoCliente = "Premium";

echo "<br>";
// concatenar string y variables
echo "El Cliente ". $nombreCliente . " es " . $tipoCliente;
// template string
echo "El Cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';