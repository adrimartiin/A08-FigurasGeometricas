<?php

require_once ('FigurasGeometricas.php');
class Circulo extends FigurasGeometricas {

    public function __construct($lado) {
        parent::__construct($lado, $lado); // Llama al constructor de la clase padre con lados iguales
    }

    public function calcularAreaCirculo() {
        // uso la funcion m_pi para sacar el num pi
        // uso la funcion pow para elevar el radio al cuadrado
        return M_PI * pow($this->getLado(), 2);
    }

    public function calcularPerimetroCirculo() {
        return 2 * M_PI * $this->getLado();
    }

    public function __toString() {
        return "El área del circulo es: " . $this->calcularAreaCirculo() . " y el perímetro es: " . $this->calcularPerimetroCirculo();
    }

    public function __destruct() {
        return "Circulo destruido";
    }
}