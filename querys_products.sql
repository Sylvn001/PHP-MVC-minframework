create table tb_products (
	id int not null primary key auto_increment,
	description varchar(200) not null,
	price float(8,2) not null
);

insert into tb_products(description, price)values('Sofa', 1250.75);
insert into tb_products(description, price)values('Chair', 378.99);
insert into tb_products(description, price)values('Bed', 870.75);
insert into tb_products(description, price)values('Notebook', 1752.49);
insert into tb_products(description, price)values('Smartphone', 999.99);