<?php include "includes/header.php";

$nombre = "Andriy"; // declaración de una variable
$_nombre = "Andriy"; // _ válido al inicio
$nombre_ = "Andriy"; // _ válido al final
$nombre = "Andriy 2"; // reasignación de la variable

define("constante", "Este es el valor de la constante"); // definición de una constante método mas usado
const constanteRara = "Esto es una constante también"; // método menos común para definir constantes

// definir 3 variables y 3 constantes luego mostrar en pantalla
// repetir 3 veces

// 1 
$var1 = "Valor 1";
$var2 = "Valor 2";
$var3 = "Valor 3";
define("constante1", "Constante 1");
define("constante2", "Valor constante 2");
define("constante3", "Valor constante 3");

echo $var1;
var_dump($var2);
echo $var3;
var_dump(constante1);
echo constante2;
var_dump(constante3);

// 2
$var4 = "Variable 4";
$var5 = "Variable 5";
$var6 = "Variable 6";
define("constante4", "Valor constante 4");
define("constante5", "Valor constante 5");
define("constante6", "Valor constante 6");

echo $var4;
var_dump($var5);
echo $var6;
var_dump(constante4);
echo constante5;
var_dump(constante6);

// 3
$var7 = "Variable 7";
$var8 = "Variable 8";
$var9 = "Variable 9";
define("constante7", "Constante 7");
define("constante8", "Constante 8");
define("constante9", "Constante 9");

echo $var7;
var_dump($var8);
echo $var9;
var_dump(constante7);
echo constante8;
var_dump(constante9);

include "includes/footer.php";