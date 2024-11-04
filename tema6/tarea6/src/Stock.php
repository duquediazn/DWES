<?php

namespace Clases;

use PDO;
use PDOException;

class Stock extends Conexion
{

    private int $producto; 
    private int $tienda;  
    private int $unidades; 

    public function __construct()
    {
        parent::__construct();
    }

    //Setters:
    public function setProducto($cod_prod) {
        $this->producto = $cod_prod;
    }

    public function setTienda($cod_tienda) {
        $this->tienda = $cod_tienda;
    }

    public function setUnidades($unidades) {
        $this->unidades = $unidades;
    }

    //Tarea 6:
    public function getStock() {
        $consulta = "SELECT unidades FROM stocks WHERE producto = :cod_producto AND tienda = :cod_tienda";
        $stmt = $this->conexion->prepare($consulta);

        try {
            $stmt->execute([
                ':cod_producto' => $this->producto,
                ':cod_tienda' => $this->tienda
            ]);
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);
            return $resultado ? $resultado->unidades : 0;
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar el stock: " . $ex->getMessage());
        }
    }

}
