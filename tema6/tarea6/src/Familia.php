<?php

namespace Clases;

use PDO;
use PDOException;

class Familia extends Conexion
{
    private string $cod;
    private string $nombre;

    // Constructor con valores por defecto
    public function __construct()
    {
        parent::__construct();
    }

    public function getFamilias() : array {
        $consulta = "SELECT cod FROM familias";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar las familias: " . $ex->getMessage());
        }
    }

    public function recuperarFamilias()
    {
        $consulta = "select * from familias order by nombre";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar: " . $ex->getMessage());
        }
        return $stmt;
    }

    // Getters
    public function getCod(): string
    {
        return $this->cod;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    // Setters
    public function setCod(string $codigo): void
    {
        $this->cod = $codigo;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
}
