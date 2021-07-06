-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema gestor
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gestor
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gestor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `gestor` ;

-- -----------------------------------------------------
-- Table `gestor`.`t_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestor`.`t_usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL DEFAULT NULL,
  `fechaNacimiento` DATE NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `usuario` VARCHAR(255) NULL DEFAULT NULL,
  `password` TEXT NULL DEFAULT NULL,
  `insert` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `gestor`.`t_categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestor`.`t_categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `fechaInsert` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categoria`),
  INDEX `fkCategoriaUsuario_idx` (`id_usuario` ASC) VISIBLE,
  CONSTRAINT `fkCategoriaUsuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `gestor`.`t_usuarios` (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `gestor`.`t_archivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestor`.`t_archivos` (
  `id_archivo` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NOT NULL,
  `id_categoria` INT NULL DEFAULT NULL,
  `nombre` VARCHAR(255) NULL DEFAULT NULL,
  `tipo` VARCHAR(255) NULL DEFAULT NULL,
  `ruta` TEXT NULL DEFAULT NULL,
  `fecha` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_archivo`),
  INDEX `fkArchivosCategorias_idx` (`id_categoria` ASC) VISIBLE,
  INDEX `fkUsuariosArchivos_idx` (`id_usuario` ASC) VISIBLE,
  CONSTRAINT `fkArchivosCategorias`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `gestor`.`t_categorias` (`id_categoria`),
  CONSTRAINT `fkUsuariosArchivos`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `gestor`.`t_usuarios` (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
