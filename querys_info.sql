create table tb_info (
	id int not null primary key auto_increment,
	title varchar(200) not null,
	description text not null
);

insert into tb_info(title, description)values('Mission', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
insert into tb_info(title, description)values('Vision', 'Morbi faucibus elit nec nibh elementum, a ultrices ante condimentum.');
insert into tb_info(title, description)values('Values', 'Pellentesque faucibus egestas justo sed malesuada. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.');
