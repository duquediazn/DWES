<?php

namespace Clases;

use PDO;
use PDOException;

/**
 * Clase Operaciones
 * 
 * Clase que gestiona la lógica de negocio para productos, familias y stock en una aplicación SOAP.
 * Proporciona métodos para recuperar información como el PVP de un producto, el stock en una tienda, 
 * los códigos de familias disponibles y los productos asociados a una familia.
 * 
 * @package Clases
 */
class Operaciones {

    /**
     * Instancia de Producto para manejar operaciones de productos.
     * 
     * @var Producto
     */
    private $producto;

    /**
     * Instancia de Familia para manejar operaciones de familias.
     * 
     * @var Familia
     */
    private $familia;

    /**
     * Instancia de Stock para manejar operaciones de stock.
     * 
     * @var Stock
     */
    private $stock;

    /**
     * Constructor de la clase Operaciones.
     * 
     * Inicializa las instancias de Producto, Familia y Stock que serán utilizadas para interactuar con 
     * la base de datos.
     */
    public function __construct()
    {
        $this->producto = new Producto();
        $this->familia = new Familia();
        $this->stock = new Stock();
    }

    /**
     * Obtiene el PVP de un producto.
     * 
     * Este método recibe el código de un producto y devuelve su PVP correspondiente.
     * 
     * @soap
     * @param int $codigo Código del producto para el cual se desea obtener el PVP.
     * @return float El PVP del producto especificado.
     * @throws PDOException Si ocurre un error al recuperar el PVP desde la base de datos.
     */
    public function getPVP(int $codigo) : float {
        try {
            $this->producto->setId($codigo);
            return $this->producto->getPVP();
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
     * @param int $cod_producto Código del producto cuyo stock se quiere consultar.
     * @param int $cod_tienda Código de la tienda en la cual se quiere consultar el stock.
     * @return int La cantidad de unidades disponibles del producto en la tienda especificada.
     * @throws PDOException Si ocurre un error al recuperar el stock desde la base de datos.
     */
    public function getStock(int $cod_producto, int $cod_tienda) : int {
        try {
            $this->stock->setProducto($cod_producto);
            $this->stock->setTienda($cod_tienda);
            return $this->stock->getStock();
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
     * @return string[] Array de códigos de todas las familias.
     * @throws PDOException Si ocurre un error al recuperar las familias desde la base de datos.
     */
    public function getFamilias() : array {
        try {
            return $this->familia->getFamilias();
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
     * @param string $cod_familia Código de la familia cuyos productos se quieren recuperar.
     * @return int[] Array de códigos de productos que pertenecen a la familia especificada.
     * @throws PDOException Si ocurre un error al recuperar los productos desde la base de datos.
     */
    public function getProductosFamilia(string $cod_familia) : array {
        try {
            $this->producto->setFamilia($cod_familia);
            return $this->producto->getProductosPorFamilia();
        } catch (PDOException $ex) {
            throw new PDOException("Error al recuperar productos de la familia: " . $ex->getMessage());
        }
    }
}
