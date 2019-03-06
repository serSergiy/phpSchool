CREATE TABLE product_descriptions (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `product_id` INT(11) NOT NULL,
    `lang` CHAR(3) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO product_descriptions (product_id, name, description, lang) 
SELECT id, name, description, "eng" as lang from products;

ALTER TABLE products
	DROP COLUMN description;