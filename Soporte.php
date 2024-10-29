<?php

declare(strict_types=1);

class Soporte {

   public function __construct(
        public string $titulo, 
        protected int $numero, 
        private float $precio)
    {}

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getPrecioconIVA(): float {
        return $this->precio * 1.21;
    }

    public function muestraResumen(): string {
        return "Precio: " .$this->precio. ", precio con iva: " .self::getPrecioconIVA(). ", titulo : " .$this->titulo;
    }

}

?>