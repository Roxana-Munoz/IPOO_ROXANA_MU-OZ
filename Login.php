<?php
//Creo la clase login que almacene el nombreUsuario,contraseñas 
class Login {
   private $nombreUsuario;
   private $contrasenia;
   private $fraseContrasenia;
   private $nuevaContrasenia;
   private $validarContrasenia;
   private $contraseniasGuardadas=["123","12345","120406", "210916"];
//Metodo constructor nos permite crear el objeto de la clase login
 public function __construct($nombreUsuario,$contrasenia,$fraseContrasenia)
 {
    $this->nombreUsuario=$nombreUsuario;
    $this->contrasenia=$contrasenia;
    $this->fraseContrasenia=$fraseContrasenia;
 }
//METODO DE ACCESOS
// El metodo de acceso get nos permite acceder al valor de los atributos de la clase login 
  public function getNombreUsuario(){

    return $this->nombreUsuario;

  } 
   public function getContrasenia(){

    return $this->contrasenia;
   }
   public function getFraseContrasenia(){

     return $this->fraseContrasenia;
   }

   //Metodo set se puede modificar el valor de los objetos
   public function setNombreUsuario($nombreUsuario){
      $this->nombreUsuario=$nombreUsuario;

   }
   public function setContrasenia($contrasenia){

    $this->contrasenia=$contrasenia;
   }
    public function setFraseContrasenia($fraseContrasenia){

        $this->fraseContrasenia=$fraseContrasenia;
    }


// Validar contraseña
public function validarContrasenia() {
   $valida = false;
   if ($this->getContrasenia() == $this->getFraseContrasenia()) {
      $validas = true;
   }
   return $valida;
}
   
   

public function cambiarContrasenia($nuevaContrasenia) {
   // Verificar si la contraseña actual es válida
   if (!$this->validarContrasenia()) {
      return "La contraseña actual es incorrecta.";
   }


   if (in_array($nuevaContrasenia, $this->contraseniasGuardadas)) {
   return "La nueva contraseña no puede coincidir con una contraseña guardada.";
   }
// Si todo es válido, cambiar la contraseña
      $this->contrasenia = $nuevaContrasenia;
      return "Contraseña cambiada exitosamente.";
  }
   //Metodo __toString 
   public function __toString()
   {
      return "El usuario se llama : ". $this->getNombreUsuario()." \n"."La contraseña es: ".$this->getContrasenia()."\n". "La frase para recordar la contraseña guardada: ". $this->getFraseContrasenia()." \n";
   }





  //Metodo recordar usauario 
  public function recordarContrasenia(){}
}




