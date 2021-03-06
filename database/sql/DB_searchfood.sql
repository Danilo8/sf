-- MySQL Script generated by MySQL Workbench
-- Thu Sep 20 11:14:00 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema DB_searchfood
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema DB_searchfood
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DB_searchfood` DEFAULT CHARACTER SET utf8 ;
USE `DB_searchfood` ;

-- -----------------------------------------------------
-- Table `DB_searchfood`.`restaurants`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_searchfood`.`restaurants` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `restaurant_name` VARCHAR(45) NOT NULL,
  `cnpj` CHAR(18) NOT NULL,
  `restaurant_phone` CHAR(14) NOT NULL,
  `address` VARCHAR(80) NOT NULL,
  `neighborhood` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `state` CHAR(2) NOT NULL,
  `cep` CHAR(9) NOT NULL,
  `profile_picture` CHAR(45) NULL,
  `owner_name` VARCHAR(45) NOT NULL,
  `cpf` CHAR(14) NOT NULL,
  `owner_email` VARCHAR(45) NOT NULL,
  `owner_phone` CHAR(14) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cnpj_UNIQUE` (`cnpj` ASC),
  UNIQUE INDEX `restaurant_phone_UNIQUE` (`restaurant_phone` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_searchfood`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_searchfood`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `address` VARCHAR(80) NULL,
  `neighborhood` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `state` CHAR(2) NULL,
  `password` VARCHAR(45) NOT NULL,
  `profile_picture` CHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_searchfood`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_searchfood`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `restaurant_id` INT NOT NULL,
  `category_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_categories_restaurants_idx` (`restaurant_id` ASC),
  CONSTRAINT `fk_categories_restaurants`
    FOREIGN KEY (`restaurant_id`)
    REFERENCES `DB_searchfood`.`restaurants` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_searchfood`.`menus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_searchfood`.`menus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `restaurant_id` INT NOT NULL,
  `product_name` VARCHAR(45) NOT NULL,
  `product_description` VARCHAR(500) NOT NULL,
  `category_id` INT NOT NULL,
  `product_price` FLOAT NOT NULL,
  `promotional_price` FLOAT NULL,
  `product_photo` CHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menus_restaurants1_idx` (`restaurant_id` ASC),
  INDEX `fk_menus_categories1_idx` (`category_id` ASC),
  CONSTRAINT `fk_menus_restaurants1`
    FOREIGN KEY (`restaurant_id`)
    REFERENCES `DB_searchfood`.`restaurants` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_menus_categories1`
    FOREIGN KEY (`category_id`)
    REFERENCES `DB_searchfood`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_searchfood`.`operating_hours`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_searchfood`.`operating_hours` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `restaurant_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_operating_hours_restaurants1_idx` (`restaurant_id` ASC),
  CONSTRAINT `fk_operating_hours_restaurants1`
    FOREIGN KEY (`restaurant_id`)
    REFERENCES `DB_searchfood`.`restaurants` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
