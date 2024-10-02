<?php
//Archivo para establecer la conexión con la BD
$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

//Establecemos conexión:
try {
    $conexionProyecto = new PDO($dsn, $user, $pass);
    $conexionProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Para control de excepciones
} catch(PDOException $e) {
    echo "Error: ".$e->getMessage();
}
