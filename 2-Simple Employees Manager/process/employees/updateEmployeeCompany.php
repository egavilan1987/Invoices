<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	$department;

	if($_POST['addDepartment']==''){
		$department=$_POST['idDepartment'];
	}else{
		$department=$_POST['addDepartment'];
	}

	$data=array(
		$_POST['idEmployeeCompany'],
		$department,
		$_POST['salary'],
		$_POST['hired_date'],
		$_POST['employee_status'],
		$_POST['comment'],

				);
	echo $obj->updateEmployeeCompany($data);
 ?>