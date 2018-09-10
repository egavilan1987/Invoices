<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$data=array(
		$_POST['idEmployeeEmergency'],
		$_POST['contactName'],
		$_POST['contact_address'],
		$_POST['contactPhone'],
		$_POST['contactEmail'],
		$_POST['relation'],
				);

	echo $obj->updateEmployeeEmergency($data);

 ?>
