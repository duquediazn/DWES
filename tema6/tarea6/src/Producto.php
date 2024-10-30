<?php

namespace Clases;

use PDO;
use PDOException;

class Producto extends Conexion
{
    private int $id;
    private string $nombre;
    private string $nombre_corto;
    private float $pvp;
    private string $familia;
    private string $descripcion;

    // Constructor con valores por defecto
    public function __construct(int $id)
    {
        $this->id = $id;

        $taca = $this->read();

        $this->nombre = $taca->nombre;
        $this->nombre_corto = $taca->nombre_corto;
        $this->descripcion = $taca->descripcion;
        $this->pvp = $taca->pvp;
        $this->familia = $taca->familia;
    }

    // 2.- Read ------------
    function read()
    {
        $consulta = "select * from productos where id=:i";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([':i' => $this->id]);
        } catch (PDOException $ex) {
            die("Error al recuperar el producto: " . $ex->getMessage());
        }
        return $stmt->fetchAll(PDO::FETCH_OBJ); //Devolvemos con All sólo es una fila
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getNombreCorto(): string
    {
        return $this->nombre_corto;
    }

    public function getPvp(): float
    {
        return $this->pvp;
    }

    public function getFamilia(): string
    {
        return $this->familia;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    // Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setNombreCorto(string $nombre_corto): void
    {
        $this->nombre_corto = $nombre_corto;
    }

    public function setPvp(float $pvp): void
    {
        $this->pvp = $pvp;
    }

    public function setFamilia(string $familia): void
    {
        $this->familia = $familia;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
}
