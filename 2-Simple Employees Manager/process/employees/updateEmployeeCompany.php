<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$data=array(
		$_POST['idEmployeeCompany'],
		$_POST['department'],
		$_POST['addDepartment'],
		$_POST['salary'],
		$_POST['hired_date'],
		$_POST['employee_status'],
		$_POST['comment'],

				);

	echo $obj->updateEmployeeCompany($data);
//print_r($data);

 ?>