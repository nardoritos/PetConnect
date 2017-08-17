use db_petconnect;

create table tb_TCC(
id int identity (1,1) not null primary key,
nome varchar (100),
senha varchar (32),
email varchar (100),
CPF varchar (14),
telefone varchar (13),
celular varchar (14),
CEP varchar(9),
endereço varchar (60),
numero varchar (5),
bairro varchar (50),
cidade varchar (50),
estado varchar (30));


select * from tb_TCC;

drop table tb_TCC;

SELECT * FROM tb_TCC where email='bb' and senha='bb'
