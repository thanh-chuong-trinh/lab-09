CREATE DATABASE IF NOT EXISTS exhibition_db;
USE exhibition_db;

DROP TABLE IF EXISTS cars;
CREATE TABLE cars (
  car_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  make VARCHAR(25) NOT NULL,
  model VARCHAR(40) NOT NULL,
  price FLOAT NOT NULL,
  yom INT NOT NULL
);

INSERT INTO cars (car_id, make, model, price, yom) VALUES (NULL, 'Holden', 'Astra', '14000', '2009');
INSERT INTO cars (car_id, make, model, price, yom) VALUES (NULL, 'BMW', 'X3', '35000', '2010');
INSERT INTO cars (car_id, make, model, price, yom) VALUES (NULL, 'Ford', 'Falcon', '39000', '2013');
INSERT INTO cars (car_id, make, model, price, yom) VALUES (NULL, 'Toyota', 'Corolla', '20000', '2012');
INSERT INTO cars (car_id, make, model, price, yom) VALUES (NULL, 'Holden', 'Commodore', '28000', '2009');
