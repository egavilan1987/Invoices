<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/departments.php";

	$obj= new Departments;

	$data=array(
		$_POST['department']
				);
	echo $obj->addDepartment($data);
 ?>


