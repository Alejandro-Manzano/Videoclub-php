<?php

include_once("Soporte.php"); // Asegúrate de que esta clase existe

class Cliente {
    private string $nombre;
    private int $numero;
    private int $maxAlquilerConcurrente;
    private int $numSoportesAlquilados = 0; // Contador de alquileres
    private array $soportesAlquilados = []; // Array para almacenar soportes alquilados

    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    // Getter y Setter para 'numero'
    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    // Getter para 'numSoportesAlquilados'
    public function getNumSoportesAlquilados(): int {
        return $this->numSoportesAlquilados;
    }

    // Método que muestra el resumen
    public function muestraResumen(): string {
        return "Nombre: " . $this->nombre . ", Alquileres realizados: " . count($this->soportesAlquilados);
    }

    // Comprueba si tiene un soporte alquilado
    public function tieneAlquilado(Soporte $s): bool {
        return in_array($s, $this->soportesAlquilados, true);
    }

    // Método para alquilar un soporte
    public function alquilar(Soporte $s): bool {
        if (!$this->tieneAlquilado($s) && $this->numSoportesAlquilados < $this->maxAlquilerConcurrente) {
            $this->soportesAlquilados[] = $s; // Añadir soporte al array
            $this->numSoportesAlquilados++; // Incrementar el contador de alquileres
            echo "Alquiler exitoso de: " . get_class($s) . "\n";
            return true; // Alquiler exitoso
        }
        echo "No se pudo alquilar: " . get_class($s) . "\n";
        return false; // No se pudo alquilar
    }

    // Método para devolver un soporte
    public function devolver(int $numSoporte): bool {
        foreach ($this->soportesAlquilados as $key => $soporte) {
            if ($soporte->getNumero() === $numSoporte) {
                unset($this->soportesAlquilados[$key]); // Eliminar el soporte del array
                $this->numSoportesAlquilados--; // Decrementar el contador
                echo "Soporte devuelto: " . get_class($soporte) . "\n";
                return true; // Devolución exitosa
            }
        }
        echo "No se pudo devolver el soporte con número: " . $numSoporte . ". No estaba alquilado.\n";
        return false; // No se pudo devolver
    }

    // Método para listar alquileres
    public function listarAlquileres(): void {
        echo "Total de alquileres: " . count($this->soportesAlquilados) . "\n";
        if ($this->numSoportesAlquilados > 0) {
            echo "Soportes alquilados:\n";
            foreach ($this->soportesAlquilados as $soporte) {
                echo "- " . get_class($soporte) . " (Número: " . $soporte->getNumero() . ")\n";
            }
        } else {
            echo "No tiene soportes alquilados.\n";
        }
    }
}
?>
