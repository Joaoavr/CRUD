create database Bert_Salad;
use Bert_Salad;

create table Cliente (
id int primary key auto_increment not null,
nome varchar(80) not null,
telefone char(13) not null,
endereco varchar(120) not null
)engine=innodb;

select * from Cliente;

create table Prato(
id int primary key auto_increment not null,
nome varchar(80) not null,
tipo_Prato varchar(120) not null,
preco double(9,2) not null
)engine=innodb;

 
 select * from Prato;