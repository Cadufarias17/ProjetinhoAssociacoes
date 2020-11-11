nome: bd_asso
usuario:
senha:

CREATE TABLE Equipes (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,

    PRIMARY KEY (id)
);

CREATE TABLE Posicoes (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,

    PRIMARY KEY (id)
);

CREATE TABLE Jogadores (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,

    PRIMARY KEY (id)
);

INSERT INTO Equipes
    (nome)
VALUES
    ('Gremio'),
    ('Inter'),
    ('Corinthians'),
    ('Flamengo');

INSERT INTO Posicoes
    (nome)
VALUES
    ('Goleiro'),
    ('Zagueiro'),
    ('Meia'),
    ('Atacante');

INSERT INTO Jogadores
    (nome)
VALUES
    ('Vanderlei'),
    ('PV'),
    ('Cuesta'),
    ('Moledo'),
    ('Ramiro'),
    ('Luan'),
    ('Gabigol'),
    ('Pedro');

CREATE TABLE Associacoes (
    id INT NOT NULL AUTO_INCREMENT,
    equipe VARCHAR(50) NOT NULL,
    posicao VARCHAR(50) NOT NULL,
    jogador VARCHAR(50) NOT NULL,

    PRIMARY KEY (id)
);

INSERT INTO Associacoes
    (equipe, posicao, jogador)
VALUES
    ('Gremio', 'Goleiro', 'Vanderlei'),
    ('Gremio', 'Goleiro', 'PV'),
    ('Inter', 'Zagueiro', 'Cuesta'),
    ('Inter', 'Zagueiro', 'Moledo'),
    ('Corinthians', 'Meia', 'Ramiro'),
    ('Corinthians', 'Meia', 'Luan'),
    ('Flamengo', 'Atacante', 'Gabigol'),
    ('Flamengo', 'Atacante', 'Pedro');