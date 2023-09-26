<?php
// Include TCPDF library
require_once('tcpdf/tcpdf.php');

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];

// Create new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set PDF meta data
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Form Data PDF');
$pdf->SetSubject('Form Data');
$pdf->SetKeywords('Form, Data, PDF');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('dejavusans', '', 12);

// Add content to the PDF
$pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);

// Close and output PDF
$pdf->Output('form_data.pdf', 'D');
?>
