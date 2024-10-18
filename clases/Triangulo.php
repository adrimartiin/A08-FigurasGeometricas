<?php

class Triangulo extends FigurasGeometricas {
    public $lado2;
    public $lado3;

    public function __construct($tipoFigura, $lado1, $lado2, $lado3) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function setLados($lado2, $lado3){
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function getLados(){
        return $this->lado2 . " " . $this->lado3;
    }

    public function calculaAreaTriangulo(){
        $area = $this->lado1 * $this->lado2 / 2;
        return $area;
    }

    public function calculaPerimetroTriangulo(){
        $perimetro = $this->lado1 + $this->lado2 + $this->lado3;
        return $perimetro;
    }

    public function __toString(){
        return "El área del triángulo es: " . $this->calculaAreaTriangulo() . ", y el perímetro es: ". $this->calculaPerimetroTriangulo();
    }
}