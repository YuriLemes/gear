create database gear;

CREATE TABLE tb_usuario (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(3) NOT NULL,
	senha VARCHAR(5),
	perfil VARCHAR(9) NOT NULL,
	ativo	TINYINT NOT NULL,
	cnpj_oficina VARCHAR(14) NOT NULL
);

INSERT INTO tb_usuario (login, senha, perfil, ativo, cnpj_oficina) values ("ADM", null, "ADMIN", 1, "10720580000180");
INSERT INTO tb_usuario (login, senha, perfil, ativo, cnpj_oficina) values ("YSL", null, "ADMIN", 1, "10720580000180");

CREATE TABLE tb_servico (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	descricao_resumida VARCHAR(25) NOT NULL,
	descricao_detalhada VARCHAR (250)
);

INSERT INTO tb_servico (descricao_resumida) values ("TROCA DE ÓLEO");
INSERT INTO tb_servico (descricao_resumida) values ("REVISÃO ELÉTRICA");
INSERT INTO tb_servico (descricao_resumida, descricao_detalhada) values ("ALINHAMENTO", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.");