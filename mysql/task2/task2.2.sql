//Part 2
//Create product without description on "eng" 

INSERT INTO products (category_id, name, price) 
VALUES (1, "XIAOMI", 120);

//Find all products where description on "eng" doesn't exist

SELECT * FROM products WHERE id NOT IN (SELECT product_id FROM product_descriptions WHERE lang="eng");
