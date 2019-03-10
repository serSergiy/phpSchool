//Part 1
//If primary або unique key already exists "on duplicate key update" part of command is executed.
//In this case id (not the best example) is duplicated.

INSERT INTO product_descriptions (id, product_id, lang, name, description) 
VALUES (5, 5, "eng", "Microsoft keyboard", "Microsoft keyboard altered"); 
ON DUPLICATE KEY UPDATE description=VALUES(description), lang=VALUES(lang), name=VALUES(name);

