<?php include 'includes/header.php';


// INCREMENTO--------------------------------
echo "INCREMENTO<br>";

$numero1 = 30;
$numero1++;

// echo $numero1++; imprime solo 30 y no 31 porque lo agrega despues
// echo ++$numero1;
echo $numero1."<br>";//imprime 31 

// DECREMENTO-------------------------------
echo "decremento<br>";

$numero2 = 30;
echo --$numero2."<br>";//imprimira 29

// incrementos en salto de cierta cantidad
// Util para juegos 
echo "Incremento en cierta cantidad<br>";

$numero3 = 30;
//$numero3 -= 2; en este caso se reducira de 2 
$numero3 += 5;
echo $numero3."<br>";//imprimira 35




include 'includes/footer.php';