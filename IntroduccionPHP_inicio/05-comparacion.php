<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";
// compara el tipo de dato y su valor
var_dump($numero2 === $numero4);
echo "<br>";

// spaceship
//-1 si izquierda es menor,0 ssi es igual ,1 si izquierda es mayor

// Si el primer valor es mayor que el segundo, el resultado será 1.
// Si el primer valor es igual al segundo, el resultado será 0.
// Si el primer valor es menor que el segundo, el resultado será -1.

var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";

include 'includes/footer.php';