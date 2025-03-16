<?php
//Indico a que archivo voy a llamar
include 'Calculadora.php';
// Creo el objeto calculadora y le asigno la variable $calculadora  de la clase Calculadora
$objCalculadora = new Calculadora(-10, -10);
$objCalculadora-> suma();
echo "En la suma  ". $objCalculadora ."\n";
$objCalculadora-> resta();
echo  "En la resta " . $objCalculadora . "\n";
$objCalculadora-> multiplicacion();
echo "En la multiplicacion "  .$objCalculadora . "\n";
$objCalculadora-> division();
echo "En la division ". $objCalculadora . "\n";
//$objCalculadora->resta();
//$objCalculadora->multiplicacion();
//$objCalculadora->division();

