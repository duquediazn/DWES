<?php

namespace Clases;

class Stock {
    private int $producto; 
    private int $tienda;  
    private int $unidades; 

    // Constructor con valores por defecto
    public function __construct(int $producto = 0, int $tienda = 0, int $unidades = 0) {
        $this->producto = $producto;
        $this->tienda = $tienda;
        $this->unidades = $unidades;
    }

    // Getters
    public function getProducto(): int {
        return $this->producto;
    }

    public function getTienda(): int {
        return $this->tienda;
    }

    public function getUnidades(): int {
        return $this->unidades;
    }

    // Setters
    public function setProducto(int $producto): void {
        $this->producto = $producto;
    }

    public function setTienda(int $tienda): void {
        $this->tienda = $tienda;
    }

    public function setUnidades(int $unidades): void {
        $this->unidades = $unidades;
    }
}
