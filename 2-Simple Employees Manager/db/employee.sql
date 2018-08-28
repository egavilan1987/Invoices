CREATE DATABASE simple_employees;

USE simple_employees;

CREATE TABLE employees(
				id_employee INT AUTO_INCREMENT,

				fullname VARCHAR(50),
				email VARCHAR(50),
				local_address VARCHAR(80),
				date_birth DATE,
				birth_place VARCHAR(80),
				birth_address VARCHAR(80),
				gender VARCHAR(10),
				nationality VARCHAR(10),
				marital_status VARCHAR(10),
				image VARCHAR(20),
				permanent_address VARCHAR(80),
				telephone VARCHAR(20),
				cellphone VARCHAR(20),
				contact_fullname VARCHAR(50),
				contact_address VARCHAR(80),		
				contact_telephone VARCHAR(20),
				contact_email VARCHAR(50),
				contact_relation VARCHAR(80),
				department VARCHAR(50),
				salary VARCHAR(50),
				estatus VARCHAR(50),
				comments VARCHAR(80),
				hired_day DATE,
				resume_path VARCHAR(20),
				created_date DATETIME,
				updated_date DATETIME,

				PRIMARY KEY(id_employee)

					);
CREATE TABLE departments(
				id_department INT auto_increment,
				name_department  VARCHAR(150),
				created_date DATETIME,
				updated_date DATETIME,
				primary key(id_department)
						);