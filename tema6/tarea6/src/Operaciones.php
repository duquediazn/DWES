<?php

namespace Clases;

use PDO;
use PDOException;

/**
 * Clase Operaciones
 * 
 * Esta clase hereda de la clase Conexion y permite realizar diversas operaciones de consulta
 * en la base de datos relacionadas con productos, familias de productos y stock en tiendas.
 * 
 * @package Clases
 */
class Operaciones extends Conexion {

    /**
     * Constructor de la clase Operaciones.
     * Llama al constructor de la clase padre (Conexion) para inicializar la conexión a la base de datos.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Obtiene el PVP de un producto.
     * 
     * Este método recibe el código de un producto y devuelve su PVP correspondiente.
     * 
     * @soap
     * @param int $codigo 
     * @return float 
     */
    public function getPVP(int $codigo) : float {
        try {
            $producto = new Producto($codigo);
            return $producto ? (float) $producto->getPvp() : 0.0;
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar el PVP: " . $ex->getMessage());
        }
    }

    /**
     * Obtiene el stock de un producto en una tienda específica.
     * 
     * Este método recibe el código de un producto y el código de una tienda,
     * devolviendo el stock existente en esa tienda para el producto.
     * 
     * @soap
     * @param int $cod_producto 
     * @param int $cod_tienda 
     * @return int 
     */
    public function getStock(int $cod_producto, int $cod_tienda) : int {
        try {
            $stock = new Stock($cod_producto,$cod_tienda);
            return $stock ? (int) $stock->getUnidades() : 0;
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar el stock: " . $ex->getMessage());
        }
    }

    /**
     * Obtiene una lista de todas las familias existentes.
     * 
     * Este método no recibe parámetros y devuelve un array con los códigos de todas las familias en la base de datos.
     * 
     * @soap
     * @return array 
     */
    public function getFamilias() : array {
        try {
            $familias = (new Familia())->getFamilias();
            return $familias;
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar las familias: " . $ex->getMessage());
        }
    }

    /**
     * Obtiene los productos de una familia específica.
     * 
     * Este método recibe el código de una familia y devuelve un array con los códigos de todos los productos de esa familia.
     * 
     * @soap
     * @param string $cod_familia 
     * @return array 
     */
    public function getProductosFamilia(string $cod_familia) : array {
        try {
            $producto = new Producto();
            $producto->setFamilia($cod_familia);
            $productos=$producto->getProductosFamilia();
            echo var_dump($productos);
            return $productos;
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar productos de la familia: " . $ex->getMessage());
        }
    }
}
