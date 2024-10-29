<?php

namespace Clases;

use PDO;
use PDOException;

/**
 * Clase Conexion
 * 
 * Esta clase se encarga de establecer una conexión a la base de datos utilizando PDO.
 * Configura los parámetros de conexión, inicializa la conexión en el constructor
 * y maneja posibles errores de conexión.
 * 
 * @package Clases
 */
class Conexion
{
    /**
     * @var string $host Dirección del servidor de la base de datos.
     */
    private $host;

    /**
     * @var string $db Nombre de la base de datos.
     */
    private $db;

    /**
     * @var string $user Nombre de usuario para la conexión a la base de datos.
     */
    private $user;

    /**
     * @var string $pass Contraseña del usuario para la conexión a la base de datos.
     */
    private $pass;

    /**
     * @var string $dsn Cadena DSN (Data Source Name) para la conexión PDO.
     */
    private $dsn;

    /**
     * @var PDO $conexion Instancia de PDO que representa la conexión a la base de datos.
     */
    protected $conexion;

    /**
     * Constructor de la clase Conexion.
     * 
     * Inicializa los atributos necesarios para la conexión y crea la conexión a la base de datos.
     */
    public function __construct()
    {
        $this->host = "localhost";
        $this->db = "tarea6";
        $this->user = "gestor";
        $this->pass = "secreto";
        $this->dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
        $this->crearConexion();
    }

    /**
     * Crea la conexión a la base de datos.
     * 
     * Utiliza los atributos configurados para inicializar la conexión PDO.
     * En caso de fallo en la conexión, captura la excepción y termina la ejecución.
     * 
     * @return PDO La instancia de conexión a la base de datos.
     * @throws PDOException Si ocurre un error durante la conexión.
     */
    public function crearConexion()
    {
        try {
            $this->conexion = new PDO($this->dsn, $this->user, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("Error en la conexión: mensaje: " . $ex->getMessage());
        }
        return $this->conexion;
    }
}
