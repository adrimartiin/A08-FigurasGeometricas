<?php

class Cuadrado extends FigurasGeometricas {
   
    // No se necesita el constructor en esta clase ya que solo se trabaja con un lado (ya que un cuadrado tiene todos los lados iguales) y lo hereda de  la clase padre

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