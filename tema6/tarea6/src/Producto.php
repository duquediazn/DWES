<?php

namespace Clases;

class Producto {
    private int $id;                
    private string $nombre;         
    private string $nombre_corto;   
    private float $pvp;             
    private string $familia;        
    private string $descripcion;     

    // Constructor con valores por defecto
    public function __construct(int $id = 0, string $nombre = '', string $nombre_corto = '', string $descripcion = '', float $pvp = 0.0, string $familia = '') {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nombre_corto = $nombre_corto;
        $this->descripcion = $descripcion;
        $this->pvp = $pvp;
        $this->familia = $familia;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getNombreCorto(): string {
        return $this->nombre_corto;
    }

    public function getPvp(): float {
        return $this->pvp;
    }

    public function getFamilia(): string {
        return $this->familia;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setNombreCorto(string $nombre_corto): void {
        $this->nombre_corto = $nombre_corto;
    }

    public function setPvp(float $pvp): void {
        $this->pvp = $pvp;
    }

    public function setFamilia(string $familia): void {
        $this->familia = $familia;
    }

    public function setDescripcion(string $descripcion): void {
        $this->descripcion = $descripcion;
    }
}
