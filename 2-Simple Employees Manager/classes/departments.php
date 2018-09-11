<?php 
	class Departments{
		public function addDepartment($data){
			
			$c=new Connect();
			$connection=$c->connection();

			$sql="INSERT INTO departments (name_department,
							created_date)
						VALUES (
							'$data[0]',
							 NOW())";

			return mysqli_query($connection,$sql);
		}

		public function getDepartmentData($idDepartment){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="SELECT id_department,
                name_department
			      FROM departments WHERE id_department='$idDepartment'";

			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);

			$departmentData=array(
						'id_department' => $row[0],
						'Department' => $row[1]
						);
			return $departmentData;
		}
		public function updateDepartment($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE departments SET name_department='$data[1]',
						updated_date=NOW()
						WHERE id_department='$data[0]'";

			return mysqli_query($connection,$sql);	
		}
	}
 ?>


