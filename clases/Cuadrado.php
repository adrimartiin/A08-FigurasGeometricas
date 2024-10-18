<?php

class Cuadrado extends FigurasGeometricas {
    public $lado;

    public function __construct($nombreFigura, $lado) {
        parent::__construct($nombreFigura);
        $this->lado = $lado;
    }

    public function calculaAreaCuadrado(){
        return $this->lado * $this->lado;
    }

    public function calculaPerimetroCuadrado(){
        return 4 * $this->lado;
    }

    public function __toString(){
        return "El área del cuadrado es: ". $this->calculaAreaCuadrado(). ", y el perímetro es: ". $this->calculaPerimetroCuadrado();
    }
    
    public function __destruct(){
        return "Cuadrado destruido";
    }
    
}