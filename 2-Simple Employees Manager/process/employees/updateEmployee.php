<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$data=array(
		$_POST['idEmployee'],
		$_POST['fullname'],
		$_POST['email'],
		$_POST['address'],
		$_POST['birth_date'],
		$_POST['birth_address'],
		$_POST['gender'],
		$_POST['nationality'],
		$_POST['marital_status'],
				);
	echo $obj->updateEmployee($data);
 ?>
