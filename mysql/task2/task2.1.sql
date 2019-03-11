//Part 1
//If primary або unique key already exists "on duplicate key update" part of command is executed.
//In this case id (not the best example) is duplicated.

INSERT INTO product_descriptions (id, product_id, lang, name, description) 
VALUES (5, 5, "eng", "Microsoft keyboard", "Microsoft keyboard altered"); 
ON DUPLICATE KEY UPDATE description=VALUES(description), lang=VALUES(lang), name=VALUES(name);

//If primary або unique key already exists "on duplicate key update" part of command is executed.
//In this case id (not the best example) is duplicated.

//Its better make product_id and lang an unique couple.

ALTER TABLE product_descriptions ADD CONSTRAINT id_lang UNIQUE (product_id, lang);

INSERT INTO product_descriptions (product_id, lang, name, description) 
VALUES (5, "eng", "Microsoft keyboard", "Microsoft keyboard altered 2"); 
ON DUPLICATE KEY UPDATE description=VALUES(description), lang=VALUES(lang), name=VALUES(name);

