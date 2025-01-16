<?php

namespace Biblioteca;

use PDO;
use PDOException;

class Conexion
{
    private $host = '148.113.202.164';
    private $db = 'biblioteca';
    private $user = 'biblioteca';
    private $pass = 'biblioteca123';
    private $dsn;
    private $conexion;

    public function __construct()
    {
        //Completar: conexión a DB
        $this->dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
        $this->getConexion();
    }

    public function getConexion()
    {
        try {
            $this->conexion = new PDO($this->dsn, $this->user, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            throw new PDOException("Error en la conexión: mensaje: " . $ex->getMessage());
        }
        return $this->conexion;
    }
}
