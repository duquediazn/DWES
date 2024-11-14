<?php
require_once 'Conexion.php';

class Votos extends Conexion {

    private $id;
    private $cantidad;
    private $idPr;
    private $idUs;

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getIdPr()
    {
        return $this->idPr;
    }

    public function getIdUs()
    {
        return $this->idUs;
    }

    //Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function setIdPr($idPr)
    {
        $this->idPr = $idPr;
    }

    public function setIdUs($idUs)
    {
        $this->idUs = $idUs;
    }

    //Insert en la tabla Votos
    public function crearVoto(){
        $consulta = "insert into votos (cantidad, idPr, idUs) values (:valoracion, :id_producto, :id_usuario)";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':valoracion' => $this->$cantidad,
                ':id_producto' =>  $this->$idPr,
                ':id_usuario' => $this->$idUs
            ]);
        } catch (\PDOException $ex) {
            die("Error al crear voto" . $ex->getMessage());
        }
    }

    public function numVotos($idProducto) {
        $consulta = "SELECT COUNT(*) AS num_votos FROM votos WHERE idPr = :id_producto";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([':id_producto' => $idProducto]);
            $numVotos=$stmt->fetch(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            die("" . $ex->getMessage());
        }
        return $numVotos->num_votos;
    }

    //Media de todos los votos de un producto
    public function mediaVotosProducto($idProducto)
    {
        $consulta = "select cantidad from votos where idPr = :id_producto";
        $stmt = self::$conexion->prepare($consulta);
        try {
            $stmt->execute([':id_producto' => $idProducto]);
            $aVotos = $stmt->fetchAll(PDO::FETCH_OBJ);
            $media=0;
            foreach($aVotos as $voto) {
                $media+=$voto->cantidad;
            }
            $media=$media/numVotos();
        } catch (\PDOException $ex) {
            die("Error al recuperar los votos" . $ex->getMessage());
        }
        return $media;
    }
}