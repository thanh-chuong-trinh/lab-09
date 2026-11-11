USE exhibition_db;


SELECT * FROM cars;


SELECT make, model, price FROM cars ORDER BY make, model;


SELECT make, model FROM cars WHERE price >= 20000;


SELECT make, AVG(price) FROM cars GROUP BY make;


SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
