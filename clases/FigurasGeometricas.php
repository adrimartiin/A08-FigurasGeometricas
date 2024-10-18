<?php

class FigurasGeometricas {
    public $tipoFigura;
    public $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function setFigura($tipoFigura){
        $this->$TipoFigura = $tipoFigura;
    }

    public function setLado($lado1){
        $this->lado1 = $lado1;
    }

    public function getFigura(){
        return $this->tipoFigura;
    }

    public function getLado(){
        return $this->lado1;
    }

    public function calcularArea(){
        return "Esto puede ser sobreescrito en caso de que sea necesario";
    }
}