<?php include 'includes/header.php';

// crear un arreglo asociativo
$cliente = [
  'nombre' => 'Andriy',
  'edad' => 112,
  'informacion' => [
    'saldo' => 200
  ]
];

// acceder a propiedad de arreglo asociativo de nivel 1

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";

echo "<pre>";
var_dump($cliente['edad']);
echo "</pre>";

// acceder a propiedad de arreglo asociativo de nivel 2

echo "<pre>";
var_dump($cliente['informacion']['saldo']);
echo "</pre>";

// agregar propiedad al arreglo 

$cliente['informacion']['cel'] = 123456;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';