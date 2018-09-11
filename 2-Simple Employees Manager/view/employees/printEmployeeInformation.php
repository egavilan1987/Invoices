<?php
require_once ('../../vendor/fpdf/fpdf.php');

$connection=mysqli_connect('localhost','root','');
mysqli_select_db($connection,'simple_employees');


$query = mysqli_query($connection,"SELECT 
                emp.id_employee,
                emp.fullname,
                emp.email,
                emp.local_address,
                emp.date_birth,
                emp.birth_place,
                emp.gender,
                emp.nationality,
                emp.marital_status,
                emp.image,
                emp.permanent_address,
                emp.telephone,
                emp.cellphone,
                emp.contact_fullname,
                emp.contact_address,        
                emp.contact_telephone,
                emp.contact_email,
                emp.contact_relation,
                dep.name_department,
                emp.salary,
                emp.employee_status,
                emp.comments,
                emp.hired_date,
                emp.resume_path,
                emp.created_date,
                emp.updated_date
                FROM employees AS emp
                INNER JOIN departments AS dep
                ON emp.id_department=dep.id_department
        WHERE emp.id_employee = '".$_GET['idPrintIdEmployee']."'");

$data=mysqli_fetch_array($query);



class PDF extends FPDF {
	function Header(){
	}
}

$pdf = new PDF('P','mm','A4'); 


$pdf->SetTitle("Employee Details");

$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',10);
$pdf->SetDrawColor(0,0,0);

$pdf->Ln(8);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190	,5,'Employee Details',0,1,'C');

$pdf->Ln(22);


$pdf->SetFont('Arial','B',12);

$pdf->Ln(25);

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

$pdf->Cell(190	,5,$data['fullname'],0,1,'C');

$pdf->Image($data['image'],90,27,30);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'E-mail:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['email'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Local Address:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(60	,5,$data['local_address'],0,'L');
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Date of Birth:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['date_birth'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Gender:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['gender'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Nationality:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['nationality'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Marital Status:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['marital_status'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->Ln(5);


$pdf->SetFont('Arial','B',14);

$pdf->Cell(190	,5,'Contact Information',0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Permanent Address:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(60	,5,$data['permanent_address'],0,'L');
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Telephone:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['telephone'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Cellphone:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['cellphone'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',14);
$pdf->Ln(5);
$pdf->Cell(190	,5,'Emergency Contact Information',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Contact Name:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['contact_fullname'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Contact Address:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(60	,5,$data['contact_address'],0,'L');
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Contact Phone No.:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['contact_telephone'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Contact E-mail:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['contact_email'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Relation:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['contact_relation'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');


$pdf->SetFont('Arial','B',14);
$pdf->Ln(5);
$pdf->Cell(190	,5,'Company Details',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Employee ID:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['id_employee'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Department:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['name_department'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');


$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Salary:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(60	,5,$data['salary'],0,'L');
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Date of Hired:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['hired_date'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Status:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60	,5,$data['employee_status'],0,0);
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(35	,5,'',0,0,'R');
$pdf->Cell(60	,5,'Comment:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(60	,5,$data['comments'],0,'L');
$pdf->Cell(35	,5,'',0,1,'R');

$pdf->Output('I','Employee Details.pdf');
?>



