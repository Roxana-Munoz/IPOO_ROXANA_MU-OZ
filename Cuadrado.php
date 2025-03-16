<?php
//Creo la clase cuadrado
class Cuadrado{
    private $inferior_iz ; // Vértice 1
    private $superior_iz ;  // Vértice 2
    private $inferior_derecho ;  // Vértice 3
    private $superior_derecho;   // Vértice 4
  
    // Constructor para inicializar los vértices
  
    public function __construct($punto1, $punto2,$punto3, $punto4) {
        $this->inferior_iz = $punto1; // Vértice 1
        $this->superior_iz = $punto2;   // Vértice 2
        $this-> inferior_derecho= $punto3;    // Vértice 3
        $this->superior_derecho = $punto4;   // Vértice 4
   
    }
    //Metodo get sirve para acceder a los valores de los atributos
     
       public function getpunto1(){

        return $this->inferior_iz;
       }
       public function getpunto2(){

        return $this->superior_iz;
       }
       public function getpunto3(){

        return $this->superior_derecho;
       } 
       public function getpunto4(){

        return $this->inferior_derecho;
       }

       //Meetodo set es para modificar o setear los valores de los atributos
       public function setpunto1($punto1){
         
         $this->inferior_iz = $punto1;  

       }
         public function setpunto2($punto2){
        $this->superior_iz = $punto2; 
       }
      public function setpunto3($punto3){
        $this->inferior_derecho=$punto3; 

      }
      public function setpunto4($punto4){
     
        $this->superior_derecho =$punto4; 
      }
       //Metodo que calcule el area del cuadrado 
       public function area($punto1, $punto2 ){

      // Calcular la distancia entre los vértices (longitud del lado del cuadrado)
         $lado = sqrt(pow($punto2 - $punto1, 2) + pow($punto1 - $punto2, 2));
      
      // Calcular el área del cuadrado
         $area = pow($lado, 2);
      // Devolver el área
          return $area;
      }
      
     // Método que desplaza el cuadrado en el plano

 public function desplazar($d) {
  // Desplazar cada vértice  
  $this->inferior_iz + $d ;
  $this->superior_iz + $d;
  $this->inferior_derecho + $d;
  $this->superior_derecho+ $d;

}
//Metodo para aumentar tamaño 
  public function aumentarTamaño($t){

    $this->inferior_iz *$t ;
    $this->superior_iz * $t;
    $this->inferior_derecho * $t;
    $this->superior_derecho * $t;
  }
  public function __toString()
  {

    return "Los vertices del cuadrado son : ". "inferior izquierdo :". $this->getpunto1(). "superior izquierdo : ". $this->getpunto2(). "inferior derecho :". $this->getpunto3(). "superior derecho ". $this->getpunto4();

    



  }




  }



  
      
    







