<?php
require_once 'Conexion.php';

class Producto extends Conexion
{
    public function __construct()
    {
        parent::__construct();
    }


    public function listadoProductos()
    {
        $consulta = "select nombre from productos order by nombre";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute();
            $productos = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            throw new PDOException("Error al recuperar los productos" . $ex->getMessage());
        }
        return $productos;
    }
}
