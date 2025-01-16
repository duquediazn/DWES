<?php

namespace Biblioteca;

use PDO;
use PDOException;

class Libro
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function listar()
    {
        $sql = "SELECT * FROM libros";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($titulo, $autor, $isbn, $disponibilidad)
    {
        $sql = "INSERT INTO libros (titulo, autor, isbn, disponibilidad) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$titulo, $autor, $isbn, $disponibilidad]);
    }

    //Completar: funciones Editar y Borrar
    //Completar: funciones Editar y Borrar
    // Completar: Implementar el método editar()
    public function editar($id, $titulo, $autor, $isbn, $disponibilidad)
    {
        $sql = "UPDATE libros SET titulo = :titulo, autor = :autor, isbn = :isbn, disponibilidad = :disponibilidad 
        WHERE id = :id";
        try {
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([
                ':titulo' => $titulo,
                ':autor' => $autor,
                ':isbn' => $isbn,
                ':disponibilidad' => $disponibilidad,
                ':id' => $id
            ]);
        } catch (PDOException $e) {
            throw new PDOException("Error al intentar actualizar el libro.");
        }
    }

    // Completar: Implementar el método borrar()
    public function borrar($id)
    {
        // Lógica para eliminar un libro
        $sql = "DELETE FROM libros WHERE id = :id";
        try {
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
        } catch (PDOException $e) {
            throw new PDOException("Error al intentar borrar el libro.");
        }
    }

    //Listar datos de un único libro:
    public function datosLibro($id)
    {
        $sql = "SELECT * FROM libros WHERE id = :id";
        try {
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([':id' => $id]);
        } catch (PDOException $e) {
            throw new PDOException("Error al intentar borrar el libro.");
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
