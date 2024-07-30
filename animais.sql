/*tabela criada no banco*/
CREATE TABLE animal (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    especie VARCHAR(50),
    raca VARCHAR(50),
    data_nascimento DATE,
    castrado BOOLEAN,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);
