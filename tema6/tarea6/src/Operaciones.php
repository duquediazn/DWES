<?php

namespace Clases;

use PDO;
use PDOException;

class Operaciones extends Conexion {

    public function __construct()
    {
        parent::__construct();
    }

    public function getPVP($codigo) {
        $consulta = "SELECT pvp FROM productos WHERE id='$codigo'";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar: " . $ex->getMessage());
        }
        $resultado=$stmt->fetchAll(PDO::FETCH_OBJ);
        return (float) $resultado[0]->pvp;
    }

    public function getStock($cod_producto, $cod_tienda) {
        $consulta = "SELECT unidades FROM stocks WHERE producto = '$cod_producto' AND tienda = '$cod_tienda'";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar: " . $ex->getMessage());
        }
        $resultado=$stmt->fetchAll(PDO::FETCH_OBJ);
        return (int) $resultado[0]->unidades;
    }

    public function getFamilias()
    {
        $consulta = "select cod from familias";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar: " . $ex->getMessage());
        }
        return $stmt->fetchAll(PDO::FETCH_COLUMN);;
    }

    public function getProductosFamilia($cod_familia) {
        $consulta = "SELECT id FROM productos WHERE familia='$cod_familia'";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar: " . $ex->getMessage());
        }
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}