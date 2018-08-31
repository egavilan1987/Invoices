<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$data=array(
		$_POST['fullname'],
		$_POST['email'],
		$_POST['address'],
		$_POST['birthDate'],
		$_POST['birthPlace'],
		$_POST['gender'],
		$_POST['nationality'],
		$_POST['status'],
				);
	echo $obj->addEmployee($data);
	//print_r($_POST);
	//print_r($data);
 ?>
