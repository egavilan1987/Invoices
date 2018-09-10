<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$data=array(
		$_POST['idEmployeeContact'],
		$_POST['permanent_address'],
		$_POST['home_phone'],
		$_POST['mobile_phone'],
				);
	echo $obj->updateEmployeeContact($data);


 ?>
