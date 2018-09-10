<?php 
	require_once "../../classes/connection.php";
	require_once "../../classes/employees.php";

	$obj= new Employees;


	$imgName=$_FILES['image']['name'];
	$storagePath=$_FILES['image']['tmp_name'];
	$folder='../../files/profile_images/';
	$finalPath=$folder.$imgName;

	$imgData=array(
		$_POST['idEmployeeImage'],
		$finalPath
				);

		if(move_uploaded_file($storagePath, $finalPath)){
			echo $obj->updateImage($imgData);
		}


 ?>