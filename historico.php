<?php
// Incluir archivo de conexión a la base de datos
include('includes/db.php');

// Obtener datos de la base de datos
$query = "SELECT fecha, hora, cantidad_botellas, ubicacion FROM llenado_botellones";
$result = $mysqli->query($query);
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Cantidad de Botellas</th>
            <th>Ubicación</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['fecha']; ?></td>
                <td><?php echo $row['hora']; ?></td>
                <td><?php echo $row['cantidad_botellas']; ?></td>
                <td><?php echo $row['ubicacion']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
