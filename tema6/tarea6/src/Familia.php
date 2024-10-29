<?php

namespace Clases;

class Familia {
    private string $cod;    
    private string $nombre;     

    // Constructor con valores por defecto
    public function __construct(string $cod = '', string $nombre = '') {
        $this->cod = $cod;
        $this->nombre = $nombre;
    }

    // Getters
    public function getCod(): string {
        return $this->cod;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    // Setters
    public function setCod(string $codigo): void {
        $this->cod = $codigo;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
}
