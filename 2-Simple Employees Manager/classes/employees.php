<?php 
	class Employees{
		public function addEmployee($data){
			
			$c=new Connect();
			$connection=$c->connection();

			$sql="INSERT INTO employees (fullname,
							email,
							local_address,
							date_birth,
							birth_place,
							gender,
							nationality,
							marital_status,
							image,
							id_department,
							created_date)
						VALUES (
							'$data[0]',
							'$data[1]',
							'$data[2]',
							'$data[3]',
							'$data[4]',
							'$data[5]',
							'$data[6]',
							'$data[7]',
							'../../files/profile_images/default-avatar.jpg',
							'1',
							 NOW())";

			return mysqli_query($connection,$sql);
		}
//Rember to delete the function below
		/*
		public function getEmployeesData($idEmployee){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="SELECT id_employee,
                fullname,
                email,
                local_address,
                date_birth,
                birth_place,
                gender,
                nationality,
                marital_status,
                image,
                permanent_address,
                telephone,
                cellphone,
                contact_fullname,
                contact_address,        
                contact_telephone,
                contact_email,
                contact_relation,
                department,
                salary,
                employee_status,
                comments,
                hired_date,
                resume_path,
                created_date,
                updated_date
			      FROM employees WHERE id_employee='$idEmployee'";

			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);

			$showImage=explode("/", $row[9]) ; 
            $imgPath=$showImage[1]."/".$showImage[2]."/".$showImage[3]."/".$showImage[4];
			
			$employeeData=array(
						'id_employee' => $row[0],
						'fullName' => $row[1],
						'email' => $row[2],
						'localAddess' => $row[3],
						'dateBirth' => $row[4],
						'birthPlace' => $row[5],
						'gender' => $row[6],
						'nationality' => $row[7],
						'maritalStatus' => $row[8],
						'image' => $imgPath,
						'permanentAddress' => $row[10],
						'telephone' => $row[11],
						'cellphone' => $row[12],
						'contactFullname' => $row[13],
						'contactAddress' => $row[14],
						'contactTelephone' => $row[15],
						'contactEmail' => $row[16],
						'contactRelation' => $row[17],
						'department' => $row[18],
						'salary' => $row[19],
						'status' => $row[20],
						'comments' => $row[21],
						'hiredDay' => $row[22],
						'resumePath' => $row[23],
						'created' => $row[24],
						'updated' => $row[25]
						);
			return $employeeData;
		}
*/
		public function getEmployeesData($idEmployee){
			
			$c=new Connect();
			$connection=$c->connection();
		
			$sql="SELECT emp.id_employee,
                emp.fullname,
                emp.email,
                emp.local_address,
                emp.date_birth,
                emp.birth_place,
                emp.gender,
                emp.nationality,
                emp.marital_status,
                emp.image,
                emp.permanent_address,
                emp.telephone,
                emp.cellphone,
                emp.contact_fullname,
                emp.contact_address,        
                emp.contact_telephone,
                emp.contact_email,
                emp.contact_relation,
                dep.name_department,
                emp.salary,
                emp.employee_status,
                emp.comments,
                emp.hired_date,
                emp.resume_path,
                emp.created_date,
                emp.updated_date
                FROM employees AS emp
                INNER JOIN departments AS dep
                ON emp.id_department=dep.id_department
                AND emp.id_employee='$idEmployee'";

			$result=mysqli_query($connection,$sql);
			
		    $row=mysqli_fetch_row($result);

			$showImage=explode("/", $row[9]) ; 
            $imgPath=$showImage[1]."/".$showImage[2]."/".$showImage[3]."/".$showImage[4];
			
			$employeeData=array(
						'id_employee' => $row[0],
						'fullName' => $row[1],
						'email' => $row[2],
						'localAddess' => $row[3],
						'dateBirth' => $row[4],
						'birthPlace' => $row[5],
						'gender' => $row[6],
						'nationality' => $row[7],
						'maritalStatus' => $row[8],
						'image' => $imgPath, 
						'permanentAddress' => $row[10],
						'telephone' => $row[11],
						'cellphone' => $row[12],
						'contactFullname' => $row[13],
						'contactAddress' => $row[14],
						'contactTelephone' => $row[15],
						'contactEmail' => $row[16],
						'contactRelation' => $row[17],
						'department' => $row[18],
						'salary' => $row[19],
						'status' => $row[20],
						'comments' => $row[21],
						'hiredDay' => $row[22],
						'resumePath' => $row[23],
						'created' => $row[24],
						'updated' => $row[25]
						);
			return $employeeData;
	
}


		public function updateEmployee($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE employees SET fullname='$data[1]',
						email='$data[2]',
						local_address='$data[3]',
						date_birth='$data[4]',
						birth_place='$data[5]',
						gender = '$data[6]',
						nationality = '$data[7]',
						marital_status = '$data[8]',
						updated_date=NOW()
						WHERE id_employee='$data[0]'";

			return mysqli_query($connection,$sql);	
		}

		public function updateEmployeeContact($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE employees SET permanent_address='$data[1]',
						telephone='$data[2]',
						cellphone='$data[3]',
						updated_date=NOW()
						WHERE id_employee='$data[0]'";

			return mysqli_query($connection,$sql);

		}
		public function updateEmployeeEmergency($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE employees SET contact_fullname ='$data[1]',
						contact_address ='$data[2]',
						contact_telephone ='$data[3]',
						contact_email='$data[4]',
						contact_relation='$data[5]',	
						updated_date=NOW()
						WHERE id_employee='$data[0]'";

			return mysqli_query($connection,$sql);

		}
		public function updateEmployeeCompany($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE employees SET department ='$data[1]',
						id_department ='$data[2]',
						salary ='$data[3]',
						hired_date ='$data[4]',
						employee_status='$data[5]',
						comments='$data[6]',	
						updated_date=NOW()
						WHERE id_employee='$data[0]'";

			return mysqli_query($connection,$sql);

		}
		public function updateImage($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE employees SET image='$data[1]',
						updated_date=NOW()
						WHERE id_employee='$data[0]'";



			return mysqli_query($connection,$sql);	
		}

		public function deleteEmployee($idEmployee){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="DELETE FROM employees 
					WHERE id_employee='$idEmployee'";
			return mysqli_query($connection,$sql);
		}
	}
 ?>


