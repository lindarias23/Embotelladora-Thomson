<?php
require('pdf/tcpdf.php'); // Asegúrate de que esta ruta sea correcta

// Conectar a la base de datos
include('includes/db.php');

// Crear un objeto PDF
$pdf = new TCPDF();
$pdf->SetCreator('Embotelladora Thomsom');
$pdf->SetAuthor('Embotelladora Thomsom');
$pdf->SetTitle('Reporte de Llenado de Botellones');

$pdf->AddPage();

// Configurar fuente y tamaño de texto
$pdf->SetFont('helvetica', '', 12);

// Obtener datos de la base de datos
$query = "SELECT fecha, hora, cantidad_botellas, ubicacion FROM llenado_botellones";
$result = $mysqli->query($query);

// Crear una tabla para mostrar los datos
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(30, 10, 'Fecha', 1);
$pdf->Cell(30, 10, 'Hora', 1);
$pdf->Cell(30, 10, 'Cantidad', 1);
$pdf->Cell(80, 10, 'Ubicación', 1);
$pdf->Ln();

$pdf->SetFont('helvetica', '', 12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['fecha'], 1);
    $pdf->Cell(30, 10, $row['hora'], 1);
    $pdf->Cell(30, 10, $row['cantidad_botellas'], 1);
    $pdf->Cell(80, 10, $row['ubicacion'], 1);
    $pdf->Ln();
}

// Generar el PDF
$pdf->Output('reporte.pdf', 'D');
