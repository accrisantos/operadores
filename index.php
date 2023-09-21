<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practica4 5J</title>
</head>
<body>
<?php

$x = 10;
echo "operador pre incremento ++, primero evalua y muestra resultado";
echo "<br>";
echo ++$x;
$x = 10;  
echo "<br>";
echo "operador post incremento ++, primero muestra valor y despues incrementa";
echo "<br>";
echo $x++;
echo "<br>";
echo "despuesnincrementa el valor de x";
echo "<br>";
echo $x;
echo "<h2>Operadores logicos</h2><br>";
echo " operador AND en español y<br>";
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "<br>";
    echo "Hello world!";
}// fin de if 
echo "<br>";
echo " operador or en español o<br>";
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
} // fin de or
echo "<br>";
echo " operador not en español no<br>";
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}// fin de not
echo "<br>";
echo "<br> programa terminado";
?>
</body>
</html>