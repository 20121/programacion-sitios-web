<?php
require('pdf/fpdf.php');
date_default_timezone_set("America/Bogota");


$host = "localhost";
$user = "root";
$cont = "12345678";
$db = "BDUNAD301127_32";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('media/logo.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'Codigo');
$pdf->Cell(25,20,'Nombre Producto');
$pdf->Cell(25,20,'Marca Producto');
$pdf->Cell(40,20,'Precio Compra');
$pdf->Cell(15,20,'Cantidad Compra');




$pdf->Ln(10);


$pdf->SetFont('Arial','',8);


$conec = mysqli_connect($host,$user,$cont,$db);
// Check connection
if (!$conec) {
    die("Connection failed: " . mysqli_connect_error());
}

$query_select = 'SELECT * FROM Tabla301127_32';
$result = mysqli_query($conec,$query_select );

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, $reg['Codigo'], 0);

$pdf->Cell(25,20, utf8_decode($reg['Nombre_Producto']), 0);

$pdf->Cell(25,20, utf8_decode($reg['Marca_Producto']), 0);

$pdf->Cell(40,20, utf8_decode($reg['Precio_Compra']), 0);

$pdf->Cell(15,20, utf8_decode($reg['Cantidad_Compra']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
?>
		
