CREATE DATABASE simple_invoice;

USE simple_invoice;

CREATE TABLE invoices(
				id_invoice INT AUTO_INCREMENT,

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

CREATE DATABASE simple_invoice;

CREATE TABLE `invoices` (
  `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_telephone` varchar(20) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `percent_tax` float DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_invoice`)
)


CREATE DATABASE simple_invoice;

USE simple_invoice;

CREATE TABLE invoices(
				id_invoice INT AUTO_INCREMENT,

				customer_name VARCHAR(50),
				customer_telephone VARCHAR(20),

				description VARCHAR(150),

				subtotal float,
				tax float,
				amount float,
				percent_tax float,


				created_date DATETIME,

				PRIMARY KEY(id_invoice)
					);
 



 INSERT INTO `simple_invoice`.`invoices` (`customer_name`, `customer_telephone`, `description`, `subtotal`, `tax`, `amount`, `percent_tax`, `created_date`) VALUES ('Jeff Bezos', '(849) 552-5444', 'Because he has to pay and thats it.', '4000', '1000', '5000', '20', '2018-08-19 19:42:45');
