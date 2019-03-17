//Part 2

SELECT * FROM products WHERE id NOT IN (SELECT product_id FROM product_descriptions);
