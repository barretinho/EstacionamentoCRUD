CREATE DATABASE dbestacionamento;
USE dbestacionamento;

CREATE TABLE vaga(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    tipo_vaga VARCHAR(100),
    ds_vaga LONGTEXT
);

CREATE TABLE funcionario(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    nm_funcionario VARCHAR(100),
    email_funcionario VARCHAR(100),
    cpf_funcionario VARCHAR(14),
    senha_funcionario VARCHAR(40),
    dt_nascimento DATE
);

CREATE TABLE veiculo(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    modelo VARCHAR(100),
    marca VARCHAR(100)
);

CREATE TABLE cliente(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    nm_cliente VARCHAR(100),
    email_cliente VARCHAR(100),
    cpf_cliente VARCHAR(100),
    dt_cadastro DATE,
    vaga INT,
    tipo_vaga INT,
    id_veiculo INT,
    FOREIGN KEY (tipo_vaga) REFERENCES vaga(cd),
    FOREIGN KEY (id_veiculo) REFERENCES veiculo(cd)
);

INSERT INTO vaga VALUES
(null, "Individual", "Vaga individual"),
(null, "Mensal", "Vaga exclusiva para pagantes mensais"),
(null, "Convênio", "Vaga para convênio");

INSERT INTO funcionario VALUES
(null, "Rodolfo Primocena Araujo", "rodolfinho@gmail.com", "201.291.989-08", md5("rodolfinho"), "2000-02-02"),
(null, "Angelik Expedita Aparecida", "angelika@gmail.com", "543.212.240-50", md5("giovanna"), "2000-10-31"),
(null, "Yuri Redes de QTS", "yuri@gmail.com", "222.826.852-85", md5("sabotage"), "2000-12-20");

INSERT INTO veiculo VALUES
(null, "Novo Uno", "Fiat"),
(null, "Gol", "Volkswagen"),
(null, "Cronos", "Fiat"),
(null, "Cross fox", "Volkswagen"),
(null, "Voyage", "Volkswagen"),
(null, "Onix", "Chevrolet "),
(null, "HB20", "Hyundai");

INSERT INTO nm_cliente VALUES
(null, "Gabriel Gamon", "gabriel@gmail.com", "385.174.876-05", "2000-10-03", 1, 1, 1),
(null, "Luca Poe", "luca@gmail.com", "485.849.467-56", "1990-09-31", 2, 1, 2),
(null, "Ana Julia Ruiz Gamon", "ana@gmail.com", "599.561.343-09", "2000-10-21", 3, 2, 3),
(null, "Pedro Vitor Garcia Moura", "pedro@gmail.com", "402.886.114-46", "2000-10-11", 4, 2, 4),
(null, "Maria Luiza Moreira de Andrade", "marialu@gmail.com", "326.071.836-26", "2000-10-16", 5, 3, 5),
(null, "Mario Covas", "mario@gmail.com", "958.313.777-41", "2000-10-18", 6, 3, 6),
(null, "Glauber Luiz", "glauber@gmail.com", "654.514.168-69", "2000-10-28", 7, 3, 7);

CREATE VIEW vwCliente AS 
    SELECT c.cd AS cd, c.nm_cliente AS nome, c.email_cliente AS email, c.cpf_cliente AS cpf, 
    c.dt_cadastro AS data_cadastro, c.vaga AS vaga, c.id_veiculo AS veiculo,
    vei.modelo AS modelo_veiculo, vei.marca AS marca_veiculo, vag.tipo_vaga AS tipo_vaga, 
    vag.ds_vaga AS ds_vaga
        FROM cliente c, veiculo vei, vaga vag 
            WHERE c.tipo_vaga = vag.cd 
            AND c.id_veiculo = vei.cd;
