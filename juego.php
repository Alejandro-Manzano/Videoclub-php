<?php

include_once("Soporte.php");

class Juego extends Soporte {

    public function __construct(
        string $titulo, 
        int $numero, 
        float $precio, 
        public string $consola,
        private int $minNumJugadores,
        private int $maxNumJugadores,
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraJugadoresPosibles() {
        return "De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores";
    }

    public function muestraResumen(): string {
        return "Precio: " . $this->getPrecio() . ", precio con IVA: " . $this->getPrecioConIVA() . ", título: " . $this->titulo . ", consola: " .
        $this->consola . ", jugadores: " . $this->muestraJugadoresPosibles();
    }
}

?>

