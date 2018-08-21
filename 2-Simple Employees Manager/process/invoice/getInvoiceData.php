<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/invoices.php";

	$obj= new Invoices;
	
	echo json_encode($obj->getInvoiceData($_POST['idInvoice']));
 ?>
