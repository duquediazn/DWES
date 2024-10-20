<?php

namespace Clases;

use PDO;
use PDOException;

class Jugador extends Conexion {

    private $id;
    private $nombre;
    private $apellidos;
    private $dorsal;
    private $posicion;
    private $barcode;

    public function __construct($nombre="", $apellidos="", $dorsal="", $posicion="", $barcode="") {

        parent::__construct();
        
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dorsal = $dorsal;
        $this->posicion = $posicion;
        $this->barcode = $barcode;
    }

    //Setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos= $apellidos;
    }

    public function setDorsal($dorsal){
        $this->dorsal=$dorsal;
    }

    public function setPosicion($posicion){
        $this->posicion=$posicion;
    }

    public function setBarcode($barcode){
        $this->barcode=$barcode;
    }


    public function crearJugador() {
        $insert = "insert into jugadores(nombre, apellidos, dorsal, posicion, barcode) 
        values(:nombre, :apellidos, :dorsal, :posicion, :barcode)";
        $stmt = $this->conexion->prepare($insert);
        try {
            $stmt->execute([
                ':nombre' => $this->nombre,
                ':apellidos' => $this->apellidos,
                ':dorsal' => $this->dorsal,
                ':posicion' => $this->posicion,
                ':barcode' => $this->barcode
            ]);
        } catch (PDOException $ex) {
            die("Ocurrio un error al insertar el producto: " . $ex->getMessage());
        }
    }
    
    
}