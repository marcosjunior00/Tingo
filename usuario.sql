create schema tingo;

CREATE TABLE usuario (
  user_id int auto_increment not null,
  nome varchar(60),
  cpf int(15),
  email varchar(60),
  senha varchar(20),
  data_nasc date,
  genero varchar(9),
  primary key(user_id)
);

insert into usuario 
(nome, email, senha) 
values 
('adm', 'adm@adm.com', 'adm');

select user_id, nome, email, senha from usuario;