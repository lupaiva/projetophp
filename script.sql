create database avaliacao;
use avaliacao;

create table produto(
    idproduto int auto_increment primary key,
    nomedoproduto varchar(20),
    valor double,
);

desc produto;

insert into produto values(null, Biscoito Bono Torta de Limão,5,00);
insert into produto values(null, Biscoito Chocolícia de Chocolate,8,00);
insert into produto values(null, Biscoito Club Social Original com 12 unidades, 15,00);
insert into produto values(null, Biscoito Wafer de Limão Bauducco,4,00);

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);

#inserir dado na tabela
insert into usuario values(null,'Luisa Paiva','lupaiva',md5('06052000'),'adm');
insert into usuario values(null,'Sofia Oliveira','sofiaoliveira',md5('080521'),'user');
insert into usuario values(null,'Milena Castro','mi.castro',md5('030561'),'user');
insert into usuario values(null,'Maria Júlia','maju',md5('123456789'),'user');

select * from usuario;