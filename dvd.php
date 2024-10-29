<?php

include_once("Soporte.php");

class Dvd extends Soporte {

    public function __construct(
        string $titulo, 
        int $numero, 
        float $precio, 
        public string $idiomas,
        private string $formatoPantalla
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function getIdiomas(): string {
        return $this->idiomas;
    }

    public function getFormatoPantalla(): string {
        return $this->formatoPantalla;
    }

    public function muestraResumen(): string {
        return "Precio: " . $this->getPrecio() . ", precio con IVA: " . $this->getPrecioConIVA() . ", título: " . $this->titulo . ", Idiomas: " .
        $this->getIdiomas() . ", Formato de pantalla: " . $this->getFormatoPantalla();
    }
}

?>