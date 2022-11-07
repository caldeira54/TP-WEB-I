-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd` DEFAULT CHARACTER SET utf8 ;
USE `bd` ;

-- -----------------------------------------------------
-- Table `bd`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`funcionario` (
  `idFuncionario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idFuncionario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`fornecedor` (
  `idFornecedor` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idFornecedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`estoque` (
  `idEstoque` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idFornecedor` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `preco` DOUBLE NOT NULL,
  `quantidade` DOUBLE NOT NULL,
  PRIMARY KEY (`idEstoque`),
  INDEX `fk_estoque_fornecedor1_idx` (`idFornecedor` ASC) VISIBLE,
  CONSTRAINT `fk_estoque_fornecedor1`
    FOREIGN KEY (`idFornecedor`)
    REFERENCES `bd`.`fornecedor` (`idFornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`produto` (
  `idEstoque` INT UNSIGNED NOT NULL,
  `idFuncionario` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `preco` DOUBLE NOT NULL,
  PRIMARY KEY (`idEstoque`),
  INDEX `fk_produto_estoque1_idx` (`idEstoque` ASC) VISIBLE,
  INDEX `fk_produto_funcionario1_idx` (`idFuncionario` ASC) VISIBLE,
  CONSTRAINT `fk_produto_estoque1`
    FOREIGN KEY (`idEstoque`)
    REFERENCES `bd`.`estoque` (`idEstoque`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_funcionario1`
    FOREIGN KEY (`idFuncionario`)
    REFERENCES `bd`.`funcionario` (`idFuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`vendasDiarias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`vendasDiarias` (
  `idVendasDiarias` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idFuncionario` INT UNSIGNED NOT NULL,
  `data` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`idVendasDiarias`),
  INDEX `fk_vendasDiarias_funcionario_idx` (`idFuncionario` ASC) VISIBLE,
  CONSTRAINT `fk_vendasDiarias_funcionario`
    FOREIGN KEY (`idFuncionario`)
    REFERENCES `bd`.`funcionario` (`idFuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`vendaAPrazo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`vendaAPrazo` (
  `idVendaAPrazo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idEstoque` INT UNSIGNED NOT NULL,
  `cliente` VARCHAR(255) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `dataInicial` VARCHAR(255) NOT NULL,
  `dataFinal` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idVendaAPrazo`),
  INDEX `fk_vendaAPrazo_produto1_idx` (`idEstoque` ASC) VISIBLE,
  CONSTRAINT `fk_vendaAPrazo_produto1`
    FOREIGN KEY (`idEstoque`)
    REFERENCES `bd`.`produto` (`idEstoque`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`notaPromissoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`notaPromissoria` (
  `idNotaPromissoria` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idFornecedor` INT UNSIGNED NOT NULL,
  `preco` DOUBLE NOT NULL,
  `dataCompra` VARCHAR(45) NOT NULL,
  `dataPagamento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNotaPromissoria`),
  INDEX `fk_notaPromissoria_fornecedor1_idx` (`idFornecedor` ASC) VISIBLE,
  CONSTRAINT `fk_notaPromissoria_fornecedor1`
    FOREIGN KEY (`idFornecedor`)
    REFERENCES `bd`.`fornecedor` (`idFornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`vendaAVista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`vendaAVista` (
  `idVendaAVista` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `valorTotal` DOUBLE NOT NULL,
  `data` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idVendaAVista`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`produtosDaVenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`produtosDaVenda` (
  `idEstoque` INT UNSIGNED NOT NULL,
  `idVendaAVista` INT UNSIGNED NOT NULL,
  `quantidade` INT NOT NULL,
  `valorUnitario` DOUBLE NOT NULL,
  PRIMARY KEY (`idEstoque`, `idVendaAVista`),
  INDEX `fk_produto_has_vendaAVista_vendaAVista1_idx` (`idVendaAVista` ASC) VISIBLE,
  INDEX `fk_produto_has_vendaAVista_produto1_idx` (`idEstoque` ASC) VISIBLE,
  CONSTRAINT `fk_produto_has_vendaAVista_produto1`
    FOREIGN KEY (`idEstoque`)
    REFERENCES `bd`.`produto` (`idEstoque`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_has_vendaAVista_vendaAVista1`
    FOREIGN KEY (`idVendaAVista`)
    REFERENCES `bd`.`vendaAVista` (`idVendaAVista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
