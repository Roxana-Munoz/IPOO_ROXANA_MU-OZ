<?php

//Indico al archivo que voy a llamar

  include 'Fecha.php';

//Creo el objeto fecha

$objFecha= new Fecha (29,2,2024);

//llamo a la funcion fecha abreviada y extendida
 echo $objFecha."\n";

//llamo a la funcion incrementar
$objFecha->incrementarDia();
echo "Dia después de incrementar: " . $objFecha. "\n";
