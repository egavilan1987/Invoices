<?php
require_once ('../../vendor/fpdf/fpdf.php');

$connection=mysqli_connect('localhost','root','');
mysqli_select_db($connection,'simple_invoice');


$query = mysqli_query($connection,"SELECT 
					customer_name,
					customer_telephone,
					description,
					subtotal,
					tax,
					amount,
					created_date FROM invoices WHERE id_invoice = '".$_GET['idPrintInvoice']."'");

$data=mysqli_fetch_array($query);



class PDF extends FPDF {
	function Header(){
		date_default_timezone_set('US/Eastern');
		$currentdate = date("m-d-Y");
		$currentTime= date("h:i:s");

		$this->SetFont('Arial','B',30);		
		//put logo
		$this->Image('../../files/EGD.jpg',10,15,25);
		$this->SetY(12);
		$this->SetX(43);
		$this->Cell(0,20,'INVOICE',10,1,'');

		$this->SetFont('Arial','B',20);
		$this->SetY(12);
		$this->SetX(43);
		$this->Cell(0,40,'NO. '.$_GET['idPrintInvoice'],0,0,'');
		$this->SetY(10);
		$this->SetX(150);
		$this->SetFont('Arial','',12);
		$this->Cell(2 ,5,'Date: '.$currentdate .'  '.$currentTime,0,0);

//$pdf->Cell(45	,5, $Total,1,1);//end of line

	}
}

$pdf = new PDF('P','mm','A4'); 


$pdf->SetTitle("Invoice");

$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',10);
$pdf->SetDrawColor(0,0,0);

$pdf->Ln(30);


$pdf->SetFont('Arial','B',12);





//billing address
$pdf->Cell(100	,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$data['customer_name'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$data['customer_telephone'],0,1);

$pdf->Ln(5);

$pdf->Cell(100	,5,'Description:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,5,'',0,0);
$pdf->MultiCell(170,5,$data['description'],0,1);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(255,255,255);


	$pdf->SetFillColor(95,166,252);
	$pdf->SetDrawColor(0,0,0);
	$pdf->Cell(50,5,'Date/Time',1,0,'',true);
	$pdf->Cell(45,5,'Subtotal',1,0,'',true);
	$pdf->Cell(40,5,'Tax',1,0,'',true);
	$pdf->Cell(57,5,'Amount',1,1,'',true);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,5,$data['created_date'],1,0);
	$pdf->Cell(45,5,$data['subtotal'],1,0);
	$pdf->Cell(40,5,$data['tax'],1,0);
	$pdf->Cell(57,5,$data['amount'],1,1);

$pdf->Output('I','Invoice Information.pdf');
?>
