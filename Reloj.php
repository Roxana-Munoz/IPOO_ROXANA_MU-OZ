<?php

//Creo la clase reloj

class Reloj
{

   private $horas;
   private $minutos;
   private $segundos;

   //El constructor crea los objetos de la clase reloj

   public function __construct($horas, $minutos, $segundos)
   {
      $this->horas = $horas;
      $this->minutos = $minutos;
      $this->segundos = $segundos;
   }
   //Metodos de acceso para cada atributo de la clase reloj

   //Con los metodos gets obtengo los valores de los atributos de la clase reloj 
   public function getHoras()

   {

      return $this->horas; //obtengo el valor del atributo horas

   }

   public function getMinutos()

   {

      return $this->minutos; //obtengo el valor del atributo minutos

   }

   public function getSegundos()

   {

      return $this->segundos; //obtengo el valor del atributo segundos

   }
   // Metodo set permite establecer los valores de los atributos
   public function setHoras($horas)
   {
       $this->horas = $horas;
   }
    
   public function setMinutos($minutos)
   {
       $this->minutos = $minutos;
   }  

   public function setSegundos($segundos)
   {
       $this->segundos= $segundos;
   }

  // Método __toString() para convertir el objeto en una cadena
   
   
  // Método __toString() para imprimir la información del objeto
   public function __toString() {
      return $this->getHoras(). " : ".$this->getMinutos(). " : " . $this->getSegundos(). "\n" ;
   }
   
   public function puestaCero()
   {

      $this->setHoras(0);
      $this->setMinutos(0);
      $this->setSegundos(0);
   }
   //Funcion que va a incrementar las horas, minutos y segundos
   //cuando el contador llegue a 23:59:59 debera pasar a 00:00:00
   public function incrementar()
   {
      
      if ($this->segundos <59) {
         $this->segundos++;
         // Código a ejecutar si la condición es verdadera
     } else {

      $this->segundos = 0;
         // Código a ejecutar si la condición es falsa
     }if ($this->minutos <59) {
         $this->minutos++;
         // Código a ejecutar si la condición es verdadera
     } else {
              $this->minutos = 0;
              
  
              if ($this->horas  < 23) { 
                   $this->horas++;
                  
              }else{
               
               $this->horas = 0;
               
            
              
            } 


      }
  }

}