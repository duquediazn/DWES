<?php

namespace Clases;

use PDO;
use PDOException;

class Stock extends Conexion {
    private int $producto; 
    private int $tienda;  
    private int $unidades; 

    // Constructor con valores por defecto
    public function __construct(int $producto, int $tienda) {

        parent::__construct();

        $this->producto = $producto;
        $this->tienda = $tienda;

        $taca = $this->read()[0];

        $this->unidades = $taca->unidades;
    }

    function read()
    {
        $consulta = "select * from stocks WHERE producto = :cod_producto AND tienda = :cod_tienda";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':cod_producto' => $this->producto,
                ':cod_tienda' => $this->tienda
            ]);
        } catch (PDOException $ex) {
            die("Error al recuperar el stock: " . $ex->getMessage());
        }
        return $stmt->fetchAll(PDO::FETCH_OBJ);
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
