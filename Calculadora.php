<?php 
   Class Calculadora {
     //Nombro los atributos de la clase calculadora

      private $operando1;
      private $operando2;
      private $resultado;
      //Metodo constructor crea los objetos de la clase calculadora
       public  function __construct ($operando1, $operando2)
       {
        $this->operando1=$operando1;
        $this->operando2=$operando2;
        $this->resultado=0;
       }

       //Metodos de acceso para cada atributo de la clase calculadora

       //Metodos gets obtengo los valores de los atributos de la clase calculadora 
         public function getOperando1(){
            return $this->operando1; //obtengo el valor del atributo operando1
         }
         public function getOperando2(){
          return $this->operando2; //obtemgo el valor del atributo del operando2
         } 

      //Metodos seters 

     // Metodo set , seteo o modifico el nuevo valor del atributo
        public  function setOperando1($operando1)

         {
            $this->operando1=$operando1; //acceso al objeto del atributo operando1 

         }
         public function setOperando2($operando2)
         {
            
            $this->operando2=$operando2;// acceso al objeto del atributo operando2  

         }        
         //operaciones

         public function suma()
         {
            $this->resultado =$this->getOperando1()+ $this->getOperando2();
            
            return $this->resultado;
         }

        public function resta()
        {
            return 
             $this->resultado=$this->getOperando1()- $this->getOperando2();
            
             
        }

        public function multiplicacion()
        {
            
            $this->resultado= $this->getOperando1() * $this->getOperando2();
            return $this->resultado;
        }
        public function division(){

      
         if($this->getOperando2() == 0){
        
            $this->resultado= " ERROR. No está definida la división por 0.";
         }else{
             $this->resultado= $this->getOperando1() / $this->getOperando2();
         }
         return $this->resultado;
     }

      public function __toString ()
      { 
          return "el resultado  es ".$this->resultado;
     }
    

    }
 
 
 
 
 
 
 
 
 
 
 
 
 
 