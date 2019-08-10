SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mytimejob
-- -----------------------------------------------------

DROP DATABASE mytimejob;

-- -----------------------------------------------------
-- Schema mytimejob
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mytimejob` DEFAULT CHARACTER SET utf8 ;
USE `mytimejob` ;

CREATE TABLE IF NOT EXISTS `mytimejob`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `tipoUsuario` INT NOT NULL,
  `senha` VARCHAR(200) NOT NULL,
  `dataCadastro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mytimejob`.`Tarefa` (
  `idTarefa` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(20) NOT NULL,
  `tarefa` VARCHAR(100) NOT NULL,
  `dataCadastro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `codigo` VARCHAR(45) NOT NULL,
  `status` VARCHAR(20) NOT NULL,
  `dataModificacao` DATETIME NULL,
  PRIMARY KEY (`idTarefa`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mytimejob`.`TarefaStatus` (
  `idStatus` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NOT NULL,
  `descricao` VARCHAR(250) NOT NULL,
  `dataCadastro` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`idStatus`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mytimejob`.`TarefaTipo` (
  `idTipo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NOT NULL,
  `descricao` VARCHAR(250) NOT NULL,
  `dataCadastro` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`idTipo`))
ENGINE = InnoDB;

INSERT INTO Usuario  (nome,email,senha,tipoUsuario) values ('Administrador', 'admin@admin.com','$2y$10$uBiwX54Mym/GfsQ3QuuAIuK3L0GPItjHmS615NwSBinAKNAKTv86G',1);
INSERT INTO Usuario  (nome,email,senha,tipoUsuario) values ('Facil Acesso', 'a@a.a','$2y$10$eZhCzoevAbvFOhWMQzajBOPVH2bSwXPTOywQbIyYb8bt46yWL0p6O',1);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;