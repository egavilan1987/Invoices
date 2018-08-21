<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/invoices.php";

	$obj= new Invoices;

	echo $obj->deleteInvoice($_POST['idInvoice']);
 ?>
