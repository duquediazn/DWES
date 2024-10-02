<?php
//Archivo para establecer la conexión con la BD
$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

//Establecemos conexión:
$conProyecto = new PDO($dsn, $user, $pass);

//Para control de excepciones:
$conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);