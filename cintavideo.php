<?php

include_once("Soporte.php");

class Cintavideo extends Soporte {

    public function __construct(
        string $titulo, 
        int $numero, 
        float $precio, 
        private int $duracion
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function getDuracion(): int {
        return $this->duracion;
    }

    public function muestraResumen(): string {
        return "Precio: " . $this->getPrecio() . ", precio con IVA: " . $this->getPrecioConIVA() . ", título: " . $this->titulo . ", duración: " . $this->duracion . " minutos";
    }
}

?>