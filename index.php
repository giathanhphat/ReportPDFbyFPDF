
<?php
    require('fpdf181/fpdf.php');
// Cell(width, heigh, content, border(0:continue, 1:newline), align(L:left, C:center, R:right))
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!',1);
$pdf->Cell(140,10,'Hello dddWorld!',1);
$pdf->Output();
?>