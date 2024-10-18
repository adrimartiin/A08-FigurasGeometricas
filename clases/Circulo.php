<?php

require_once ('FigurasGeometricas.php');
class Circulo extends FigurasGeometricas {
    // en esta clase no hace falta constructor ya que se trabaja con un valor (radio) que se hereda de la clase padre

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
        echo "Circulo destruido";
    }
}