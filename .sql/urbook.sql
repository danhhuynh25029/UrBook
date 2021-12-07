DROP DATABASE urbook;
CREATE DATABASE IF NOT EXiSTS urbook CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE urbook;
-- tạo bảng thể loại sách
CREATE TABLE categories(
	id int auto_increment not null,
    name varchar(20) not null,
    primary key(id)
);
-- tạo bảng thông tin website 
CREATE TABLE information(
	id int auto_increment not null,
    type varchar(50) not null,
    infor varchar(50),
    primary key(id)
);
INSERT INTO information(type,infor) VALUES('SDT','0789658670');
INSERT INTO information(type,infor) VALUES('Facebook','https://www.facebook.com/danh250/');
INSERT INTO information(type,infor) VALUES('Email','danhhuynh250@gmail.com');
-- tạo bảng sản phẩm
CREATE TABLE products(
	id int primary key auto_increment,
    name varchar(200) not null,
    image varchar(200) not null,
    author varchar(200) not null,
	quantity int not null,
    price int not null, 
    description text,
    category_id int not null,
    created_at datetime default current_timestamp(),
    updated_at datetime default now(),
    foreign key(category_id) references categories(id)
);
-- tạo bảng người mua hàng
drop table user;
create table user(
	id int auto_increment not null,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    created_at datetime default current_timestamp(),
    updated_at datetime default now(),
	primary key(id)
);
insert into user(name,email,password) values('admin','admin@gmail.com','123');