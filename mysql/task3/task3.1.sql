//Part 1

// Unnecessary - product_id and lang already indexed as primary keys. 
// Same in category_descriptions - paired primary already indexed. 
// CREATE INDEX pd_id_lang ON product_descriptions(product_id, lang);

// Decreased affected rows count, removed join buffer ussage
CREATE INDEX category_id ON products(category_id);


