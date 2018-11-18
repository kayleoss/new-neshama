CREATE TABLE products (
    product_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    product_name varchar(100) not null,
    product_likes int(11) default 0
)

CREATE TABLE posts (
	id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	text varchar(MAX) not null
)

INSERT INTO products (product_name, product_likes) VALUES ('bodyscrub', 0);
INSERT INTO products (product_name, product_likes) VALUES ('facialcleanser', 0);
INSERT INTO products (product_name, product_likes) VALUES ('footbalm', 0);
INSERT INTO posts (text) VALUES ('I believe one way to stay healthy is to have a balanced and nutritional diet as well!');