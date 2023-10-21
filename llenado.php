<?php
// Incluir archivo de conexión a la base de datos
include('includes/db.php');

// Verificar si se ha recibido una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $cantidad_botellas = $_POST['cantidad_botellas'];
    $ubicacion = $_POST['ubicacion'];

    // Validar los datos (puedes agregar más validaciones según tus necesidades)

    // Insertar los datos en la base de datos
    $query = "INSERT INTO llenado_botellones (fecha, hora, cantidad_botellas, ubicacion) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("ssis", $fecha, $hora, $cantidad_botellas, $ubicacion);
        if ($stmt->execute()) {
            // Llenado de botellón registrado con éxito
            $response = array('message' => 'Llenado de botellón registrado con éxito.');
            echo json_encode($response);
        } else {
            // Error al registrar el llenado de botellón
            $response = array('message' => 'Error al registrar el llenado de botellón.');
            echo json_encode($response);
        }
        $stmt->close();
    }
    $mysqli->close();
}
?>
