SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

DROP DATABASE mytimejob;

CREATE SCHEMA IF NOT EXISTS mytimejob DEFAULT CHARACTER SET utf8;

USE mytimejob;

CREATE TABLE IF NOT EXISTS mytimejob.Usuario(
  idUsuario INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  tipoUsuario INT NOT NULL,
  senha VARCHAR(200) NOT NULL,
  dataCadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  
  PRIMARY KEY (idUsuario)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS mytimejob.TarefaStatus(
  idStatus INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(20) NOT NULL,
  descricao VARCHAR(250) NULL,
  dataCadastro DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  
  PRIMARY KEY (idStatus)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS mytimejob.TarefaTipo(
  idTipo INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(20) NOT NULL,
  descricao VARCHAR(250) NULL,
  dataCadastro DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  
  PRIMARY KEY (idTipo)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS mytimejob.MarcaSubMarca(
  idSubMarca INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  descricao VARCHAR(250) NULL,
  dataCadastro DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  
  PRIMARY KEY (idSubMarca)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS mytimejob.TarefaMarca(
  idMarca INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  descricao VARCHAR(250) NULL,
  subMarcaId INTEGER NULL,
  dataCadastro DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  
  PRIMARY KEY (idMarca),
  CONSTRAINT fk_marcaSubMarca FOREIGN KEY (subMarcaId) REFERENCES MarcaSubMarca (idSubMarca)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS mytimejob.Tarefa(
  idTarefa INT NOT NULL AUTO_INCREMENT,
  tipoId INTEGER NOT NULL,
  marcaId INTEGER NOT NULL,
  subMarcaId INTEGER NOT NULL,
  dataCadastro DATETIME NULL,
  codigo VARCHAR(45) NOT NULL,
  statusId INTEGER NOT NULL,
  dataModificacao DATETIME NULL,
  
  PRIMARY KEY (idTarefa),
  CONSTRAINT fk_tarefaTipoTarefa FOREIGN KEY (tipoId) REFERENCES TarefaTipo (idTipo),
  CONSTRAINT fk_tarefaStatusTarefa FOREIGN KEY (statusId) REFERENCES TarefaStatus (idStatus),
  CONSTRAINT fk_tarefaMarcaTarefa FOREIGN KEY (marcaId) REFERENCES TarefaMarca (idMarca),
  CONSTRAINT fk_tarefaMarcaTarefaSubMarca FOREIGN KEY (subMarcaId) REFERENCES MarcaSubMarca (idSubMarca)
)ENGINE = InnoDB;


INSERT INTO Usuario  (nome,email,senha,tipoUsuario) values ('Administrador', 'admin@admin.com','$2y$10$uBiwX54Mym/GfsQ3QuuAIuK3L0GPItjHmS615NwSBinAKNAKTv86G',1);
INSERT INTO Usuario  (nome,email,senha,tipoUsuario) values ('Facil Acesso', 'a@a.a','$2y$10$eZhCzoevAbvFOhWMQzajBOPVH2bSwXPTOywQbIyYb8bt46yWL0p6O',1);


-- CREATE TRIGGER trig_data_cadastro
-- BEFORE INSERT ON mytimejob.Tarefa
-- FOR EACH ROW
-- SET dataCadastro = DATE(NEW.dataCadastro);

-- CREATE TRIGGER trig_data_modificacao
-- BEFORE UPDATE ON mytimejob.Tarefa
-- FOR EACH ROW
-- SET dataModificacao = DATE(NEW.dataModificacao);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;