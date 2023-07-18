<?php include 'includes/header.php';

// buscar elementos en un arrelgo
$numeros = [1, 2, 3];

echo "<pre>";
var_dump(in_array(2, $numeros));
echo "</pre>";

// ordenar elementos de un arreglo de menor a mayor
sort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// ordenar elementos de una arreglo de mayor a menor
rsort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// ordenar arreglo asociativo por valores
$cliente = [
  'nombre' => 'Andriy',
  'tipo' => 'Premium',
  'saldo' => 200,
];

asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

arsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// ordenar arreglos asociativo por llaves
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';