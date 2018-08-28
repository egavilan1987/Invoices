<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/departments.php";

	$obj= new Departments;



	$data=array(
				$_POST['idDepartment'],
			    $_POST['department']
				);  
	echo $obj->updateDepartment($data);
 ?>
