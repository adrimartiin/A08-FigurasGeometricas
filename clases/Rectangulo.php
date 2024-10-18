<?php

require_once ('FigurasGeometricas.php');
class Rectangulo extends FigurasGeometricas{
    public $lado2;

    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    public function setLadoRectangulo($lado2){
        $this->lado2 = $lado2;
    }
    public function getLadoRectangulo(){
        return $this->lado2;
    }

    public function calcularAreaRectangulo(){
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetroRectangulo(){
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString(){
        return "El área del rectangulo es: ". $this->calcularAreaRectangulo(). ", y el perímetro es: ". $this->calcularPerimetroRectangulo();
    }

    public function __destruct(){
        return "Rectangulo destruido";
    }
}