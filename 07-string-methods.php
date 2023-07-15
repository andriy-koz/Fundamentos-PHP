<?php include 'includes/header.php';

// crea variable para cliente
$nombreCliente = "Andriy";

// extension de un string | 2 métodos
echo strlen($nombreCliente);
echo "</br>";

echo var_dump($nombreCliente);
echo "</br>";

// eliminar espacios en blanco
$nombreClienteEspacios = "   Andriy  ";
echo trim($nombreClienteEspacios);
echo "</br>";

// convertir a mayusculas
echo strtoupper($nombreCliente);
echo "</br>";

// convertir a minusculas
echo strtolower($nombreCliente);
echo "</br>";

// reemplazar un valor de una cadena de texto
echo str_replace("i", "Y", $nombreCliente);
echo "</br>";

// comprobar existencia de un valor dentro de una cadena de texto
echo strpos("d", $nombreCliente);
echo "</br>";

// concatenar variables y string | 2 métodos
$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "</br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";
echo "</br>";

include 'includes/footer.php';