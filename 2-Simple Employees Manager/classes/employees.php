<?php 
	class Employees{
		public function addInvoice($data){
			
			$c=new Connect();
			$connection=$c->connection();

			$sql="INSERT INTO invoices (customer_name,
							customer_telephone,
							description,
							subtotal,
							tax,
							amount,
							percent_tax,
							created_date)
						VALUES (
							'$data[0]',
							'$data[1]',
							'$data[5]',
							'$data[2]',
							'$data[4]',
							'$data[3]',
							'$data[6]',
							 NOW())";

			return mysqli_query($connection,$sql);
		}

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
                hired_day,
                resume_path,
                created_date,
                updated_date
			      FROM employees WHERE id_employee='$idEmployee'";

			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);

			$showImage=explode("/", $row[9]) ; 
            $imgPath=$showImage[1]."/".$showImage[2]."/".$showImage[3]."/".$showImage[4];
			
			$invoiceData=array(
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
			return $invoiceData;
		}
		public function updateInvoice($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE invoices SET customer_name='$data[1]',
						customer_telephone='$data[2]',
						description='$data[3]',
						subtotal='$data[4]',
						tax='$data[5]',
						amount = '$data[6]',
						percent_tax = '$data[7]',
						created_date=NOW()
						WHERE id_invoice='$data[0]'";


		

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


