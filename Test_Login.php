<?php
//Indico al archivo que voy a llamar

  include 'Login.php';

//Creo el objeto login 
//$nombreUsuario,$contrasenia,$fraseContrasenia
 
$objLogin= new Login ("Pablo","26789","1234");

echo $objLogin."\n";


// Validar la contraseña
$validacion = $objLogin->validarContrasenia();
echo "Validación de la contraseña: " . ($validacion ? "Correcta" : "Incorrecta") . "\n";

// Cambiar la contraseña (usamos una nueva contraseña válida para cambiarla)
$nuevaContrasenia = "54321";
$cambio = $objLogin->cambiarContrasenia($nuevaContrasenia);
echo $cambio . "\n"; // Mensaje sobre si se cambió correctamente o si hubo un error