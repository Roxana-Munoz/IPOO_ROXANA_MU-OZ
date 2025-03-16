<?php

// Creo la clase fecha

class Fecha {
     
      private $dias;
      private $mes;
      private $anios;

// Arreglo asociativo para los nombres de los meses
private $meses = [
    1 => "enero", 2 => "febrero", 3 => "marzo", 4 => "abril",
    5 => "mayo", 6 => "junio", 7 => "julio", 8 => "agosto",
    9 => "septiembre", 10 => "octubre", 11 => "noviembre", 12 => "diciembre"
];
//El metodo  constructor crea los objetos de la clase fecha
      public function __construct($dias,$mes, $anios)
      {
         $this->dias=$dias;
         $this->mes=$mes;
         $this ->anios=$anios;

      }
       // Metodo get obtengo los valores de los atributos de la clase fecha
       public function getDias()
       {
          return $this->dias;

       }

       public function getMes()
       {
          return $this->mes;

       }

       public function getAnios()
       {
          return $this->anios;

       }
  // Metodo set permite establecer los valores de los atributos
      public function setMes($mes){

         $this->mes=$mes;

      }

      public function setAnios($anios){

         $this->anios=$anios;

      }

   // Metodo __toStrimg para la fecha abreviada y extentida 
   public function __toString()
   {
      return " La fecha abreviada : ". $this->getDias() . " / ". $this->getMes () . " / ". $this->getAnios(). "\n" ."La fecha extendida :". $this->getDias() ." de " . $this->meses[$this->mes] . " del " .$this->getAnios()."\n";
  }

 //Metodo para ver si el año es bisiesto o no
   public function esBisiesto(){
     $bisiesto=false ;
     {
        if (($this->anios % 4==0 && $this->anios %100 !==0 )||($this->anios %400==0)){
         $bisiesto=true;
         }
       return $bisiesto;

     }
 
   }
 //Metodo para incrementar el dia
   
   public function incrementarDia(){
   //arreglo indexado para los dias del mes 
    $diaMes=[31, 28, 30];
    //Incrementar dias
     // $this->dias++;
    if ($this->esBisiesto()){
       $diaMes[2]=29;
       $this->dias=1;
       $this->mes++;
       if($this->mes > $diaMes[$this->mes]){
         $this->dias=1;// volver a enero nuevamente
         $this->mes++;
         if ($this->mes > 12){
            $this->mes=1;
            $this->anios++;
         }

       }

     }
  }
}












