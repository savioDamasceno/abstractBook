 CREATE TABLE generosliterarios(
     id_genero INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
     genero VARCHAR(250) UNIQUE KEY NOT NULL
 );
 
 CREATE TABLE usuario(
     id_usuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
     nome VARCHAR(250) NOT NULL,
     sobrenome VARCHAR(350) NOT NULL,
     email VARCHAR(350) UNIQUE KEY NOT NULL,
     senha VARCHAR(350) NOT NULL,
     id_genero INT NOT NULL,
     CONSTRAINT fk_genero_preferido FOREIGN KEY(id_genero) REFERENCES generosliterarios(id_genero)
 );



INSERT INTO generosliterarios(genero) VALUES ("Tragédia");
INSERT INTO generosliterarios(genero) VALUES ("Ação");
INSERT INTO generosliterarios(genero) VALUES ("Romance");
INSERT INTO generosliterarios(genero) VALUES ("Comédia");
INSERT INTO generosliterarios(genero) VALUES ("Ficção");
INSERT INTO generosliterarios(genero) VALUES ("Drama");