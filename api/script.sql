mysql -u root

#criar base
create database avaliacao;

#chamar a base
use avaliacao

#criar tabela
create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);
create table produto(
    idproduto int auto_increment primary key,
    nome varchar(20),
    tipo varchar(20),
    pais varchar(20),
    nota varchar(20),
    comentario varchar(40)
);

#inserir dado na tabela
insert into usuario values(null,'Administrador','admin',md5('123'),'adm');
insert into usuario values(null,'Caio Pereira','caio',md5('123'),'user');
/* */
insert into produto values(null,'stella','malte','belgica','5','artois');

#mostrar tabela
select * from usuario;
/* */
select * from produto;