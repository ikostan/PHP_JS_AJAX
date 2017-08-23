-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema webstore
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema webstore
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webstore` DEFAULT CHARACTER SET utf8 ;
USE `webstore` ;

-- -----------------------------------------------------
-- Table `webstore`.`customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webstore`.`customers` ;

CREATE TABLE IF NOT EXISTS `webstore`.`customers` (
  `customer_id` INT NOT NULL AUTO_INCREMENT,
  `customer_fname` VARCHAR(45) NOT NULL,
  `customer_lname` VARCHAR(45) NOT NULL,
  `customer_address` VARCHAR(100) NOT NULL,
  `customer_city` VARCHAR(45) NOT NULL,
  `customers_tel` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE INDEX `customers_id_UNIQUE` (`customer_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webstore`.`orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webstore`.`orders` ;

CREATE TABLE IF NOT EXISTS `webstore`.`orders` (
  `order_id` INT NOT NULL,
  `customer_customer_id` INT NOT NULL,
  `order_date` DATE NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE INDEX `order_id_UNIQUE` (`order_id` ASC),
  INDEX `fk_order_customer_idx` (`customer_customer_id` ASC),
  CONSTRAINT `fk_order_customer`
    FOREIGN KEY (`customer_customer_id`)
    REFERENCES `webstore`.`customers` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webstore`.`books`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webstore`.`books` ;

CREATE TABLE IF NOT EXISTS `webstore`.`books` (
  `book_title` VARCHAR(100) NOT NULL,
  `book_isbn` VARCHAR(13) NOT NULL,
  `book_autor` VARCHAR(50) NOT NULL,
  `book_price` FLOAT(5,2) NOT NULL,
  PRIMARY KEY (`book_isbn`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webstore`.`books_reviews`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webstore`.`books_reviews` ;

CREATE TABLE IF NOT EXISTS `webstore`.`books_reviews` (
  `books_review` TEXT(500) NOT NULL,
  `book_book_isbn` VARCHAR(13) NOT NULL,
  PRIMARY KEY (`book_book_isbn`),
  CONSTRAINT `fk_books_review_book1`
    FOREIGN KEY (`book_book_isbn`)
    REFERENCES `webstore`.`books` (`book_isbn`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webstore`.`order_items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webstore`.`order_items` ;

CREATE TABLE IF NOT EXISTS `webstore`.`order_items` (
  `book_book_isbn` VARCHAR(13) NOT NULL,
  `order_order_id` INT NOT NULL,
  `book_has_order_amount` TINYINT(3) NOT NULL,
  PRIMARY KEY (`book_book_isbn`, `order_order_id`),
  INDEX `fk_book_has_order_order1_idx` (`order_order_id` ASC),
  INDEX `fk_book_has_order_book1_idx` (`book_book_isbn` ASC),
  CONSTRAINT `fk_book_has_order_book1`
    FOREIGN KEY (`book_book_isbn`)
    REFERENCES `webstore`.`books` (`book_isbn`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_book_has_order_order1`
    FOREIGN KEY (`order_order_id`)
    REFERENCES `webstore`.`orders` (`order_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
