<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$data=array(
		$_POST['fullname'],
		$_POST['email'],
		$_POST['address'],
		$_POST['birth_date'],
		$_POST['birth_place'],
		$_POST['gender'],
		$_POST['nationality'],
		$_POST['status'],
				);
	echo $obj->addEmployee($data);
 ?>
