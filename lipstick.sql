create database  lipstick;
create database  lipstick character set='utf8';
use lipstick;
drop database  lipstick;

create table account(
	username varchar(50) not null ,
	email varchar(50) primary key,
    password varchar(50) not null
);
insert into account values('admin','admin@gmail.com','admin');
create table users(
	id int primary key auto_increment,
    username varchar(40) not null,
    phone character(10) not null,
    email varchar(128),
    foreign key(email) references account(email) 
);

	
insert into users(username, phone,email) values('admin','0389943552', 'admin@gmail.com' );

 create table category(
	id_category char(10) primary key,
    name_category varchar(100) not null
);
insert into category values ('L01', 'Cream lipstick');
insert into category values ('L02', 'Matte lipstick');
insert into category values ('L03', 'Gloss lipstick');

create table products(
	id_products char(10) primary key,
    id_category char(10) ,
    name_products varchar(100) not null,
    price int not null,
    image char(50) not null,
    foreign key (id_category) references category(id_category)
);

create table cart(
	id_cart int primary key auto_increment,
    id int,
    foreign key (id) references users(id)
);
create table detail_cart(
	id_cart int,
	id_products char(10),
	number int,
	primary key(id_cart, id_products),
foreign key (id_cart) references cart(id_cart),
foreign key (id_products) references products(id_products)
);



insert into cart(id) value (1);

create table receipt(
	id_receipt int primary key auto_increment,
    date_create_receipt datetime not null,
    total float(13) not null,
    id int,
    foreign key (id) references users(id),
    address text,
    stastus_payment varchar(50) not null,
    status_receipt varchar(50) not null
);

create table detail_receipt(
	id_receipt int,
    id_products character(10),
	number_products int(10),
    primary key(id_receipt,id_products),
foreign key (id_receipt) references receipt(id_receipt),
foreign key (id_products) references products(id_products)
	
);
drop table detail_receipt;
alter table detail_receipt add number_products int(10);



insert into products value('01','L01','Rouge dior forever liquid red','600000','dior-1.webp');
insert into products value('02','L01','Rouge dior forever liquid orange','600000','dior-2.webp');
insert into products value('03','L01','Rouge dior forever liquid nude','600000','dior-3.webp');
insert into products value('04','L01','Rouge drama ink dark red','720000','lancome-1.jpg');
insert into products value('05','L01','Rouge drama ink red','750000','lancome-2.jpg');
insert into products value('06','L01','Rouge drama ink dark orange','750000','lancome-3.jpg');
insert into products value('07','L01','Rouge drama ink light pink','730000','lancome-4.jpg');
insert into products value('08','L01','Rouge drama ink purple','720000','lancome-5.jpg');
insert into products value('09','L01','Rouge drama ink baby pink','720000','lancome-6.jpg');

insert into products value('10','L02','Dior lip tattoo orange','800000','dior-1.webp');
insert into products value('10','L02','Dior lip tattoo dusty rose','800000','dior-1.webp');

-- lam lai --

insert into products value('C01','L01','Rouge dior red','600000','dior-1.webp');
insert into products value('C02','L01','Rouge dior orange','600000','dior-2.webp');
insert into products value('C03','L01','Rouge dior nude','600000','dior-3.webp');
insert into products value('C04','L01','Rouge dark red','720000','lancome-1.jpg');
insert into products value('C05','L01','Rouge drama red','750000','lancome-2.jpg');
insert into products value('C06','L01','Rouge drama dark orange','750000','lancome-3.jpg');
insert into products value('C07','L01','Rouge light pink','730000','lancome-4.jpg');
insert into products value('C08','L01','Rouge purple','720000','lancome-5.jpg');
insert into products value('C09','L01','Rouge baby pink','720000','lancome-6.jpg');

insert into products value('G01','L03','Dior tattoo orange','820000','dior-1.webp');
insert into products value('G02','L03','Dior tattoo dusty rose','830000','dior-2.webp');
insert into products value('G03','L03','Dior tattoo dark red','850000','dior-3.webp');
insert into products value('G04','L03','Dior lip oil light pink','800000','dior-4.webp');
insert into products value('G05','L03','Dior lip oil coral','800000','dior-5.webp');
 insert into products value('G06','L03','Dior addict gloss ultradior','820000','dior-6.webp');
insert into products value('G07','L03','Dior addict gloss baby pink','800000','dior-7.webp');
insert into products value('G08','L03','Dior addict gloss nude','800000','dior-8.webp');
insert into products value('G09','L03','Dior addict gloss diorling','800000','dior-9.webp');


insert into products value('M01','L02','Matte dior orange','750000','dior-0.jpg');
insert into products value('M02','L02','Matte dior red','730000','dior-1.jpg');
insert into products value('M03','L02','Matte dior pink','730000','dior-2.jpg');
insert into products value('M04','L02','Matte limited edition','850000','dior-3.jpg');
insert into products value('M05','L02','Rouge dreams limited edition','810000','dior-4.webp');
insert into products value('M06','L02','Diorific dreams limited edition','800000','dior-5.webp');
insert into products value('M07','L02','The slim matte lipstick pink','820000','ysl-1.jpg');
insert into products value('M08','L02','The slim matte lipstick orange','840000','ysl-2.webp');
insert into products value('M09','L02','The slim matte lipstick red','820000','ysl-3.webp');

