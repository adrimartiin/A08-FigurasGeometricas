<?php
require_once('FigurasGeometricas.php');
class Cuadrado extends FigurasGeometricas {

    public function __construct($lado) {
        parent::__construct($lado, $lado); // Llama al constructor de la clase padre con dos lados iguales
    }
    public function calculaAreaCuadrado(){
        return $this->lado1 * $this->lado1;
    }

    public function calculaPerimetroCuadrado(){
        return 4 * $this->lado1;
    }

    public function __toString(){
        return "El área del cuadrado es: ". $this->calculaAreaCuadrado(). ", y el perímetro es: ". $this->calculaPerimetroCuadrado();
    }
    
    public function __destruct(){
        return "Cuadrado destruido";
    }
    
}