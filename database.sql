create database if not exists taskmanager;
use taskmanager;

create table usuario(
	id int primary key auto_increment,
    nome varchar(255),
    email varchar(200)
);

create table tarefa(
	id int primary key auto_increment,
    fk_usuario int,
    descricao varchar(500),
    setor varchar(100),
    prioridade enum('baixa', 'media', 'alta'),
    date_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status_tarefa enum('a fazer', 'fazendo', 'pronto') default 'a fazer'
);
