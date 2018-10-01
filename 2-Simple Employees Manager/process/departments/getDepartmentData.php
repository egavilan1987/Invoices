<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/departments.php";

	$obj= new Departments;

	echo json_encode($obj->getDepartmentData($_POST['idDepartment']));
 ?>
