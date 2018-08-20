<?php
require_once ('../../vendor/fpdf/fpdf.php');

$connect=mysqli_connect('localhost','root','');
mysqli_select_db($connect,'simple_invoice');


class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		date_default_timezone_set('US/Eastern');
		$currentdate = date("m-d-Y");
		$currentTime= date("h:i:s");
		$this->SetY(10);
		$this->SetX(150);
		$this->SetFont('Arial','',12);
		$this->Cell(2 ,5,'Date: '.$currentdate .'  '.$currentTime,0,0);

		$this->Cell(12);


		$this->SetFont('Arial','B',30);		
		//put logo
		$this->Image('../../files/EGD.jpg',10,15,25);
		$this->SetY(12);
		$this->SetX(43);
		$this->Cell(0,20,'ALL INVOICES',10,1,'');

		$this->Ln(8);
		
		$this->SetFont('Arial','B',12);
		
		$this->SetFillColor(95,166,252);
		$this->SetDrawColor(0,0,0);
		$this->Cell(20,5,'No.',1,0,'',true);
		$this->Cell(35,5,'Customer Name',1,0,'',true);
		$this->Cell(30,5,'Telephone',1,0,'',true);
		$this->Cell(30,5,'Sub-total',1,0,'',true);
		$this->Cell(30,5,'Tax',1,0,'',true);
		$this->Cell(45,5,'Total',1,1,'',true);

	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


$pdf = new PDF('P','mm','A4'); //use new class

$pdf->SetTitle("Invoices Information");

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',10);
$pdf->SetDrawColor(0,0,0);

$totalSubtotal=0;
$totalTax=0;
$Total=0;



$query=mysqli_query($connect,"SELECT * FROM invoices");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(20,5,$data['id_invoice'],1,0);
	$pdf->cell(35,5,$data['customer_name'],1,0);
	$pdf->Cell(30,5,$data['customer_telephone'],1,0);
	$pdf->Cell(30,5,$data['subtotal'],1,0);
	$pdf->Cell(30,5,$data['tax'],1,0);
	$pdf->Cell(45,5,$data['amount'],1,1);
	$totalSubtotal=$totalSubtotal+$data['subtotal'];
	$totalTax=$totalTax+$data['tax'];
	$Total=$Total+$data['amount'];
	
}

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(85	,5,'Total',1,0);
$pdf->Cell(30	,5,$totalSubtotal,1,0);
$pdf->Cell(30	,5,$totalTax,1,0);
$pdf->Cell(45	,5, $Total,1,1);//end of line

$pdf->Output('I','Invoices Information.pdf');
?>
