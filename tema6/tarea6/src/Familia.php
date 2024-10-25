<?php

namespace Clases;

class Familia {
    private $cod;
    private $nombre;    

    public function getCod() {
        return $this->cod;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setCod($codigo) {
        $this->cod = $codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
