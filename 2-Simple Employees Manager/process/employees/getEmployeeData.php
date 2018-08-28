<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;
	
	echo json_encode($obj->getEmployeesData($_POST['idEmployee']));
 ?>
