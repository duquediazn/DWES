<?php

namespace Clases;

use PDO;
use PDOException;

class Data extends Conexion
{
    // Constructor que llama al constructor de la clase padre (Conexion).
    public function __construct()
    {
        parent::__construct();
    }

    // Método para recuperar todos los jugadores de la tabla "jugadores", ordenados por nombre.
    public function recuperarJugadores()
    {
        $consulta = "SELECT * FROM jugadores ORDER BY nombre";
        try {
            $stmt = $this->conexion->query($consulta);
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados ?: null; // Retorna los resultados o null si no hay jugadores.
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar jugadores: " . $ex->getMessage());
        }
    }

    // Método genérico para validar un valor en la tabla "jugadores" basado en una columna.
    private function isValidValue($column, $value)
    {
        $consulta = "SELECT $column FROM jugadores";
        try {
            $stmt = $this->conexion->query($consulta);
            $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);
            return !in_array($value, $resultados); // Retorna true si no encuentra el valor.
        } catch (PDOException $ex) {
            throw new PDOException("Error al validar $column: " . $ex->getMessage());
        }
    }

    // Método para verificar si un código de barras es válido.
    public function isValidCode($codigo)
    {
        return $this->isValidValue('barcode', $codigo); // Utiliza el método genérico.
    }

    // Método para verificar si un dorsal es válido.
    public function isValidDorsal($dorsal)
    {
        return $this->isValidValue('dorsal', $dorsal); // Utiliza el método genérico.
    }
}
