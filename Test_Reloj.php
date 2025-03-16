<?php

//Indico al archivo que voy a llamar

  include 'Reloj.php';

//Creo el objeto reloj 

$objReloj= new Reloj (2,59,57);
echo "Hora inicial: " . $objReloj."\n";
//llamo a la funcion incrementar
$objReloj->incrementar();
echo "Hora después de incrementar: " . $objReloj. "\n";
$objReloj->puestaCero();
echo "Hora después de poner en cero: " . $objReloj . "\n";