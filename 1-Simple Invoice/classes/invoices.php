<?php 
	class Invoices{
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

		public function getInvoiceData($idInvoice){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="SELECT id_invoice,
			          customer_name,
			          customer_telephone,
			          description,
			          subtotal,
			          tax,
			          amount,
			          percent_tax,
			          created_date
			      FROM invoices WHERE id_invoice='$idInvoice'";

			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);

			
			$invoiceData=array(
						'id_invoice' => $row[0],
						'customer_name' => $row[1],
						'customer_telephone' => $row[2],
						'description' => $row[3],
						'subtotal' => $row[4],
						'tax' => $row[5],
						'total' => $row[6],
						'percent_tax' => $row[7],
						'last_update' => $row[8]
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



		public function deleteInvoice($idInvoice){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="DELETE FROM invoices 
					WHERE id_invoice='$idInvoice'";
			return mysqli_query($connection,$sql);
		}
	}
 ?>


