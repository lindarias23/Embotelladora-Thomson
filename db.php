<?php
// Datos de conexión a la base de datos
$host = 'nombre_del_servidor_mysql'; // Normalmente 'localhost'
$usuario = 'nombre_de_usuario';
$contrasena = 'contrasena_del_usuario';
$base_de_datos = 'nombre_de_la_base_de_datos';

// Crear una conexión a la base de datos
$mysqli = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Establecer la codificación de caracteres a UTF-8 (opcional)
$mysqli->set_charset("utf8");
?>
