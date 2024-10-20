<?php

namespace Clases;

use PDO;
use PDOException;

class Data extends Conexion{
    public function __construct() {

        parent::__construct();
    
    }

    public function recuperarJugadores()
    {
        $consulta = "SELECT * FROM jugadores ORDER BY nombre";
        try {
            $stmt = $this->conexion->query($consulta);
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            if ($resultados) {
                return $resultados; // Devolver los resultados como un array de objetos
            } 
        } catch (PDOException $ex) {
            die("Error al recuperar jugadores: " . $ex->getMessage());
        }
        return null; // Retornar null si no hay resultados
    }
    
    public function isValidCode($codigo) {
        $consulta = "SELECT barcode FROM jugadores";
        try {
            $stmt = $this->conexion->query($consulta);
            $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);
            if ($resultados && array_search($codigo, $resultados)) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $ex) {
            die("Error al recuperar jugadores: " . $ex->getMessage());
        }
        
    }

    public function isValidDorsal($dorsal) {
        $consulta = "SELECT dorsal FROM jugadores";
        try {
            $stmt = $this->conexion->query($consulta);
            $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);
            if ($resultados && array_search($dorsal, $resultados)) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $ex) {
            die("Error al recuperar jugadores: " . $ex->getMessage());
        }
        
    }
}