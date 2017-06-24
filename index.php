
<?php
require('fpdf181/fpdf.php');
// Cell(width, heigh, content, border(0,1), link(0:continue, 1:newline), align(L:left, C:center, R:right))
// width used the best is 190
// 1 page default = excel row A -> I and column 1 -> 47
class PDF extends FPDF
{
// Page header
function Header()
{
	global $title;
	//set fill color
	$this->SetFillColor(51,119,255);
	$this->SetTextColor(128);
	// Logo
    $this->Image('fpdf181/tutorial/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Title
	$w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    $this->Cell($w,9,$title,1,1,'C', true);
    // Move to the right
    $this->Cell(80);
    // Line break as margin-bottom
    $this->Ln(10);
}
function Chapter($num, $label)
{
	$this->SetFillColor(153,153,102);
	$this->SetTextColor(255,0,0);
	$this->SetFont('Arial','',12);
	$this->Cell(0,10,'Chuong '.$num.': '.$label,0,1,'L', true);
}

function Body($file)
{
	// Read text file
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Output justified text
    // MultiCell(width, heigh, file text,..,..,) for every row
    $this->MultiCell(0,5,$txt);
    // Line break
    $this->Ln();
    // Mention in italics
    $this->SetFont('','I');
    $this->Cell(0,5,'(end of excerpt)');
}

function Layout($num, $label, $file)
{	$this->AddPage();
	$this->Chapter($num, $label);
	$this->Body($file);
}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',1,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();

// define sum number page
$title = '20000 Leagues Under the Seas';
$pdf->SetTitle($title);
$pdf->AddPage();
$pdf->SetAuthor('giathanhphat');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/tuto1.htm');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(1, 'gia thanh phat', 'fpdf181/tutorial/20k_c1.txt');
$pdf->Layout(2, 'gia thanh loc', 'fpdf181/tutorial/20k_c2.txt');
$pdf->AliasNbPages();
$pdf->Output();
?>