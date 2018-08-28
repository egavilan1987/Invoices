<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;

	echo $obj->deleteEmployee($_POST['idEmployee']);
 ?>
