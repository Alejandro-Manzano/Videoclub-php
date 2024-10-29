<?php

declare(strict_types=1);

class Soporte {

   public function __construct(
        private string $titulo, 
        private int $numero, 
        private float $precio)
    {}

    public function getPrecio(): int {
        return $this->precio;
    }

    public function getPrecioconIva(): float {
        return $this->precio * 1.21;
    }

    public function mostrarResumen(): string {
       
    }

}

    $soporte = new Soporte("Rana", 2632, 21);

    echo $soporte->getPrecioconIva();

?>