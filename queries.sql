USE exhibition_db;

-- 1. All rows and columns
SELECT * FROM cars;

-- 2. Selected columns, sorted by make then model
SELECT make, model, price FROM cars ORDER BY make, model;

-- 3. Cars priced at 20000 or more
SELECT make, model FROM cars WHERE price >= 20000;

-- 4. Average price per make
SELECT make, AVG(price) FROM cars GROUP BY make;

-- 5. Cars priced between 10000 and 15000 (exclusive)
SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
