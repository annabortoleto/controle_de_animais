/*tabela criada no banco*/
CREATE TABLE pessoa (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(50),
    endereco VARCHAR(100),
    bairro VARCHAR(50),
    id_cidade INT,
    cep VARCHAR(10),
    FOREIGN KEY (id_cidade) REFERENCES cidade(id)
);