<?php

declare(strict_types=1);

class Cliente {

   public function __construct(
        public string $titulo, 
        protected int $numero, 
        private float $precio)
    {}

    public function getPrecio(): float {
        return $this->precio;
    }

   

}

?>