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
    ('goleiro'),
    ('zagueiro'),
    ('meia'),
    ('atacante');

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