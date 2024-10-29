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
     * @param int $codigo Código del producto.
     * @return float El PVP del producto, o 0.0 si no se encuentra el producto.
     */
    public function getPVP(int $codigo) : float {
        $consulta = "SELECT pvp FROM productos WHERE id = :codigo";
        $stmt = $this->conexion->prepare($consulta);
        
        try {
            $stmt->execute([':codigo' => $codigo]);
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);
            return $resultado ? (float) $resultado->pvp : 0.0;
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
     * @param int $cod_producto Código del producto.
     * @param int $cod_tienda Código de la tienda.
     * @return int El número de unidades del producto en la tienda especificada, o 0 si no se encuentra.
     */
    public function getStock(int $cod_producto, int $cod_tienda) : int {
        $consulta = "SELECT unidades FROM stocks WHERE producto = :cod_producto AND tienda = :cod_tienda";
        $stmt = $this->conexion->prepare($consulta);

        try {
            $stmt->execute([
                ':cod_producto' => $cod_producto,
                ':cod_tienda' => $cod_tienda
            ]);
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);
            return $resultado ? (int) $resultado->unidades : 0;
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
     * @return array Lista de códigos de las familias.
     */
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

    /**
     * Obtiene los productos de una familia específica.
     * 
     * Este método recibe el código de una familia y devuelve un array con los códigos de todos los productos de esa familia.
     * 
     * @soap
     * @param string $cod_familia Código de la familia.
     * @return array Lista de códigos de los productos pertenecientes a la familia.
     */
    public function getProductosFamilia(string $cod_familia) : array {
        $consulta = "SELECT id FROM productos WHERE familia = :cod_familia";
        $stmt = $this->conexion->prepare($consulta);

        try {
            $stmt->execute([':cod_familia' => $cod_familia]);
            return $stmt->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar productos de la familia: " . $ex->getMessage());
        }
    }
}
