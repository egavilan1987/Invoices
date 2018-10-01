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
							employee_status,
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
							'Inactive',
							 NOW())";

			return mysqli_query($connection,$sql);
		}

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
                emp.updated_date,
                dep.id_department
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
						'updated' => $row[25],
						'id_department' => $row[26]
						);
			return $employeeData;
	
}

		public function getDashboardData(){
			
			$c=new Connect();
			$connection=$c->connection();
		
			$sql="SELECT count(fullname) FROM employees";
			$sql2="SELECT count(employee_status) FROM employees WHERE employee_status='active'";
			$sql3="SELECT count(employee_status) FROM employees WHERE employee_status='inactive'";
			$sql4="SELECT count(name_department) FROM departments";


			$result=mysqli_query($connection,$sql);
			$result2=mysqli_query($connection,$sql2);
			$result3=mysqli_query($connection,$sql3);
			$result4=mysqli_query($connection,$sql4);
			
		    $row=mysqli_fetch_row($result);
		    $row2=mysqli_fetch_row($result2);
		    $row3=mysqli_fetch_row($result3);
		    $row4=mysqli_fetch_row($result4);
			
			$employeeData=array(
						'totalEmployees' => $row[0],
						'activeEmployees' => $row2[0],
						'inactiveEmployees' => $row3[0],
						'totalDepartments' => $row4[0],
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

			
			$sql="UPDATE employees SET 
						id_department ='$data[1]',
						salary ='$data[2]',
						hired_date ='$data[3]',
						employee_status='$data[4]',
						comments='$data[5]',	
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


