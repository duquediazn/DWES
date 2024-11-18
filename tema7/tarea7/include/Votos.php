<?php
require_once 'Conexion.php';

class Votos extends Conexion
{

    private $id;
    private $cantidad;
    private $idPr;
    private $idUs;

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // Getters y Setters
    public function getId() { return $this->id; }
    public function getCantidad() { return $this->cantidad; }
    public function getIdPr() { return $this->idPr; }
    public function getIdUs() { return $this->idUs; }

    public function setId($id) { $this->id = $id; }
    public function setCantidad($cantidad) { $this->cantidad = $cantidad; }
    public function setIdPr($idPr) { $this->idPr = $idPr; }
    public function setIdUs($idUs) { $this->idUs = $idUs; }

    //Insert en la tabla Votos
    public function miVoto($cantidad, $idPr, $idUs)
    {
        if ($this->verificarVoto($idPr, $idUs)) {
            return false; // El usuario ya ha votado
        }
        
        $consulta = "INSERT INTO votos (cantidad, idPr, idUs) VALUES (:cantidad, :idPr, :idUs)";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':cantidad' => $cantidad,
                ':idPr' => $idPr,
                ':idUs' => $idUs
            ]);
        } catch (\PDOException $ex) {
            die("Error al crear voto: " . $ex->getMessage());
        }
        
        return $this->mediaVotosProducto($idPr);
    }


    //Número de votos de un producto (cuántos usuarios lo han votado)
    public function numVotos($idProducto)
    {
        $consulta = "SELECT COUNT(*) AS num_votos FROM votos WHERE idPr = :id_producto";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([':id_producto' => $idProducto]);
            $numVotos = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            die("Error al contar el número de votos" . $ex->getMessage());
        }
        return $numVotos->num_votos;
    }

    //Media de todos los votos de un producto
    public function mediaVotosProducto($idPr)
    {
        $consulta = "SELECT AVG(cantidad) AS media FROM votos WHERE idPr = :id_producto";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([':id_producto' => $idPr]);
            $mediaVotos = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            die("Error al recuperar los votos" . $ex->getMessage());
        }
        return $mediaVotos->media ?? 0;
    }

    //Verifica si un usuario ha votado por un producto
    public function verificarVoto($idPr, $idUs)
    {
        $consulta = "SELECT COUNT(*) AS votos FROM votos WHERE idPr = :id_producto AND idUs = :id_usuario";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':id_producto' => $idPr,
                ':id_usuario' => $idUs
            ]);
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);

            return ($resultado->votos > 0); // El usuario ya ha votado, devolvemos false

        } catch (\PDOException $ex) {
            die("Error al verificar los votos" . $ex->getMessage());
        }
    }

    //Pintar estrellas
    public function pintarEstrellas($idPr)
    {
        $media = $this->mediaVotosProducto($idPr);

        $estrellas = floor($media);
        $mediaDecimal = $media - $estrellas;
        $halfStar = ($mediaDecimal >= 0.5) ? true : false;

        return [
            'estrellas' => $estrellas,
            'halfStar' => $halfStar
        ];
    }
}
