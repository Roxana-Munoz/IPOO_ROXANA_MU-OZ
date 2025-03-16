<?php

//Creo la clase persona y sus atributos
    class Persona{
      private $nombre;
      private $apellido;
      private $tipoDoc;
      private $nroDoc;
      private $correoElectronico;

 //Metodo constructor(crea objetos de la clase persona

    public  function __construct ($nombre,$apellido,$tipoDoc,$nroDoc,$correoElectronico)
    {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->tipoDoc=$tipoDoc;
    $this->nroDoc=$nroDoc;
    $this->correoElectronico= $correoElectronico;
 }

 // Metodo get (permite obtener el valor de los atributos)
    
    public function getNombre()
    {
        return  $this->nombre;
    } 
    public function getApellido()
    {
         return  $this->apellido;
    }
    
    public  function getTipoDoc()
    {
        return $this->tipoDoc;
    }
    public  function getNroDoc()
    {
        return $this->nroDoc;
    }
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    
    }
    
 // Metodo set permite establecer los valores de los atributos
      
      public function setNombre($nombre)
      {
          $this->nombre = $nombre;
      }
       

      public function setApellido($apellido)
      {
          $this->apellido = $apellido;
      }

      public function setTipoDoc($tipoDoc)
      {
          $this->tipoDoc = $tipoDoc;
      }
       
      public function setNroDoc($nroDoc)
      {
          $this->nroDoc = $nroDoc;
      }  

      public function setCorreoElectronico($correoElectronico)
      {
          $this->correoElectronico= $correoElectronico;
      }
  
     // Método __toString() para convertir el objeto en una cadena
      
      
     // Método __toString() para imprimir la información del objeto
      public function __toString() 
      {
         return "Nombre y apellido: " . $this->getNombre() . " " . $this->getApellido() . "\n" .
                "Tipo de documento: " . $this->getTipoDoc() . "\n" .
                "Número de DNI: " . $this->getNroDoc() . "\n" .
                "Correo electrónico: " . $this->getCorreoElectronico() . "\n"; // Añadido \n al final
      }

// Método Destructor
public function __destruct() {
    echo "Objeto de Persona eliminado para {$this->nombre}.\n";
}
}

