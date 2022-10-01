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
  `nome` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFuncionario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`fornecedor` (
  `idFornecedor` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `valorNotinha` DOUBLE NOT NULL,
  `dataCompraNotinha` VARCHAR(45) NOT NULL,
  `dataPagamentoNotinha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFornecedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`produto` (
  `idProduto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idFornecedor` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `precoCompra` DOUBLE NOT NULL,
  `precoVenda` DOUBLE NOT NULL,
  PRIMARY KEY (`idProduto`),
  INDEX `fk_produto_fornecedor_idx` (`idFornecedor` ASC) VISIBLE,
  CONSTRAINT `fk_produto_fornecedor`
    FOREIGN KEY (`idFornecedor`)
    REFERENCES `bd`.`fornecedor` (`idFornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`vendasDiarias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`vendasDiarias` (
  `idVendasDiarias` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `data` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `idFuncionario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idVendasDiarias`),
  INDEX `fk_vendasDiarias_funcionario1_idx` (`idFuncionario` ASC) VISIBLE,
  CONSTRAINT `fk_vendasDiarias_funcionario1`
    FOREIGN KEY (`idFuncionario`)
    REFERENCES `bd`.`funcionario` (`idFuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`estoque` (
  `idEstoque` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `dataRenovacao` VARCHAR(45) NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`idEstoque`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd`.`fiado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd`.`fiado` (
  `idFiado` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idProduto` INT UNSIGNED NOT NULL,
  `cliente` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `dataInicial` VARCHAR(45) NOT NULL,
  `dataFinal` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFiado`),
  INDEX `fk_fiado_produto1_idx` (`idProduto` ASC) VISIBLE,
  CONSTRAINT `fk_fiado_produto1`
    FOREIGN KEY (`idProduto`)
    REFERENCES `bd`.`produto` (`idProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
