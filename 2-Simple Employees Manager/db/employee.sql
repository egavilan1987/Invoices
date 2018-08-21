CREATE DATABASE employee;

USE employee;

CREATE TABLE employees(
		id_employee INT AUTO_INCREMENT,

		customer_name VARCHAR(50),
		customer_telephone VARCHAR(20),

		description VARCHAR(150),

		subtotal float;
		tax float;
		amount float;
		percent_tax float;


		created_date DATETIME,

		PRIMARY KEY(id_invoice)
			);

