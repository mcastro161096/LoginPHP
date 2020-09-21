USE dbphp7;

CREATE TABLE Usuarios( 
Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Login VARCHAR(64) NOT NULL,
Senha VARCHAR(256) NOT NULL,
Nome VARCHAR(256) NOT NULL,
Sobrenome VARCHAR(256) NOT NULL,
DataNascimento TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
Escolaridade VARCHAR(256) NOT NULL,
Profissao VARCHAR(256) NOT NULL,
DataCadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

