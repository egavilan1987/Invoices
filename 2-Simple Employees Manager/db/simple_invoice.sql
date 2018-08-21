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
