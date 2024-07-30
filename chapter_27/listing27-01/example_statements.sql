CREATE TABLE IF NOT EXISTS product (
   id integer PRIMARY KEY AUTO_INCREMENT,
   description text,
   price float
)

DELETE FROM product WHERE price < 0

SELECT * FROM product WHERE price > 99
