
create database infoquestbd;
-- DROP DATABASE infoquestbd;
-- DELETE FROM jogos WHERE id_jogo = 1; 
use infoquestbd;

create table usuarios (
id_usuario int(10) auto_increment NOT NULL,
nome varchar(30) NOT NULL,
img_user varchar(100),
email varchar(50) UNIQUE NOT NULL,
data_nasc DATE NOT NULL,
senha varchar(100) NOT NULL,
PRIMARY KEY (id_usuario)
);

-- INSERT INTO usuarios (id_usuario, nome, img_user, email, data_nasc, senha) VALUES (null, 'luisa', null, 'luisa@romanha.com', '2002-05-16', '123');
CREATE TABLE interesses (
  id_interesse INT NOT NULL AUTO_INCREMENT,
  nome_interesse VARCHAR(50) NOT NULL, 
  img_interesse varchar(100),
  descricao VARCHAR(200) NOT NULL,
  PRIMARY KEY (id_interesse)
);
-- INSERT INTO interesses (id_interesse, nome_interesse, img_interesse, descricao) VALUES (null, 'Banco de Dados', null, 'Aprenda sobre o banco de dados');
CREATE TABLE usuarios_interesse (
  id_interesses_usuarios INT(11) NOT NULL AUTO_INCREMENT,
  usuario_id INT NOT NULL,
  interesse_id INT NOT NULL,
  PRIMARY KEY (id_interesses_usuarios),
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario),
  FOREIGN KEY (interesse_id) REFERENCES interesses(id_interesse)
);
INSERT INTO usuarios_interesse (usuario_id, interesse_id) VALUES (13, 1);
CREATE TABLE jogos (
id_jogo INT NOT NULL AUTO_INCREMENT,
nome_jogo VARCHAR(50) NOT NULL,
descricao TEXT NOT NULL,
categoria VARCHAR(200) NOT NULL,
img_jogo VARCHAR(100),
usuario_id INT,
PRIMARY KEY (id_jogo),
FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);
INSERT INTO jogos (id_jogo, nome_jogo, descricao, categoria, img_jogo, usuario_id) 
VALUES (null, 'Infoquest', 'Embarque nessa história divertida sobre a história da computação', 'Computação', 'img/infoquestjogojpg.jpg', null);
-- ALTER TABLE jogos ADD COLUMN link_jogo INT;
CREATE TABLE categorias ( 
id_categoria INT NOT NULL,
nome_categoria VARCHAR(50) NOT NULL,
descricao_categoria TEXT NOT NULL,
PRIMARY KEY (id_categoria)
);

CREATE TABLE jogos_categorias (
  jogos_id INT NOT NULL,
  categorias_id INT NOT NULL,
  PRIMARY KEY (jogos_id, categorias_id),
  FOREIGN KEY (jogos_id) REFERENCES jogos(id_jogo),
  FOREIGN KEY (categorias_id) REFERENCES categorias(id_categoria)
);








