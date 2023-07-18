<?php include 'includes/header.php';

// crear varios arreglos
$cliente1 = [];
$cliente2 = array();
$cliente3 = ['nombre' => 'Andriy', 'cel' => '12345'];

// usar 'empty'

echo "<pre>";
var_dump(empty($cliente1));
echo "</pre>";

echo "<pre>";
var_dump(empty($cliente3));
echo "</pre>";

// usar 'isset'

echo "<pre>";
var_dump(isset($cliente3['codigo']));
echo "</pre>";

echo "<pre>";
var_dump(isset($cliente1));
echo "</pre>";

include 'includes/footer.php';