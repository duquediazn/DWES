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

    //Constructor:
    public function __construct(int $id=0)
    {
        parent::__construct();

        $this->id = $id;
        if ($id != 0) {

            $taca = $this->read()[0];

            $this->nombre = $taca->nombre;
            $this->nombre_corto = $taca->nombre_corto;
            $this->descripcion = $taca->descripcion;
            $this->pvp = $taca->pvp;
            $this->familia = $taca->familia;
        }
    }

    public function getProductosFamilia() {
        $consulta = "SELECT id FROM productos WHERE familia = :cod_familia";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([':cod_familia' => $this->familia]);
            return $stmt->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar productos de la familia: " . $ex->getMessage());
        }
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
        return $stmt->fetchAll(PDO::FETCH_OBJ);
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
