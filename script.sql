drop table jogos;

create table jogos (
	id int primary key AUTO_INCREMENT,
    nome varchar(100) not null,
    genero varchar(100) not null,
    ano_lancamento int not null,
    preco float,
    status int not null default 1
)
