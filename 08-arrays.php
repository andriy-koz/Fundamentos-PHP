<?php include 'includes/header.php';

// crear arreglos indexados | 2 métodos
$carrito = [];
$carrito2 = array();

// agregar valores a un arreglo
$carrito = ["Televisión", "Celular", "Reloj"];

// formatear el resultado de var_dump con etiqueta html
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "</br>";

// acceder a elemento de un arreglo por indice
echo $carrito[1];
echo "</br>";

// agregar un elemento a un arreglo conociendo su extension
$carrito[3] = "Laptop";
var_dump($carrito[3]);
echo "</br>";

// agregar elemento al final
array_push($carrito, "Lámpara");
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "</br>";

// agregar elemento al inicio
array_unshift($carrito, "algo al inicio");
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "</br>";

// usar segundo metodo para crear arrays con varios valores iniciales
$carrito3 = array("valor 1", "valor 2", "valor 3");
echo "<pre>";
var_dump($carrito3);
echo "</pre>";
echo "</br>";

include 'includes/footer.php';