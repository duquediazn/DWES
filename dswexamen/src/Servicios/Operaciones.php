<?php


namespace Biblioteca\Servicios;

use Biblioteca\Conexion;

class Operaciones
{
    private $conexion;

    public function __construct()
    {
        $conexionObj = new Conexion();
        $this->conexion = $conexionObj->getConexion();
    }

    public function getLibrosDisponibles()
    {
        $sql = "SELECT * FROM libros WHERE disponibilidad = 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getLibroPorISBN($isbn)
    {
        $sql = "SELECT * FROM libros WHERE isbn = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$isbn]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
