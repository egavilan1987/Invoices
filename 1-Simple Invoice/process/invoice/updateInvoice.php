<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/invoices.php";

	$obj= new Invoices;

	$tax=$_POST['amount']*$_POST['tax']/100;
	$subTotal=$_POST['amount']-$tax;
	$telephone=$_POST['input_111'][0];


	$data=array(
				$_POST['idInvoice'],
			    $_POST['customer'],  
			    $telephone, 
			    $_POST['description'],  
			    $subTotal,
			    $tax,
			    $_POST['amount'],
			    $_POST['tax']
				);  


	echo $obj->updateInvoice($data);
 ?>
