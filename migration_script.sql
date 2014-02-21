-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: db
-- Source Schemata: db
-- Created: Fri Feb 21 22:45:09 2014
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;;

-- ----------------------------------------------------------------------------
-- Schema db
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `db` ;
CREATE SCHEMA IF NOT EXISTS `db` ;

-- ----------------------------------------------------------------------------
-- Table db.goods
-- ----------------------------------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db`.`goods` (
  `id_goods` INT(11) NOT NULL ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `art` INT(11) NULL DEFAULT NULL ,
  `count_goods` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_goods`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- ----------------------------------------------------------------------------
-- Table db.groupe
-- ----------------------------------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db`.`groupe` (
  `id_groupe` INT(11) NOT NULL ,
  `zone` VARCHAR(45) NULL DEFAULT NULL ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_groupe`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- ----------------------------------------------------------------------------
-- Table db.house
-- ----------------------------------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db`.`house` (
  `id_house` INT(11) NOT NULL ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `housecol` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_house`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- ----------------------------------------------------------------------------
-- Table db.order
-- ----------------------------------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db`.`order` (
  `id` INT(11) NOT NULL ,
  `id_house` INT(11) NOT NULL ,
  `id_goods` INT(11) NOT NULL ,
  `id_groupe` INT(11) NOT NULL ,
  `count` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`, `id_groupe`, `id_goods`, `id_house`) ,
  INDEX `_idx` (`id_house` ASC) ,
  INDEX `fk_order_2_idx` (`id_groupe` ASC) ,
  INDEX `fk_order_3_idx` (`id_goods` ASC) ,
  CONSTRAINT `fk_order_1`
    FOREIGN KEY (`id_house` )
    REFERENCES `db`.`house` (`id_house` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_2`
    FOREIGN KEY (`id_groupe` )
    REFERENCES `db`.`groupe` (`id_groupe` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_3`
    FOREIGN KEY (`id_goods` )
    REFERENCES `db`.`goods` (`id_goods` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- ----------------------------------------------------------------------------
-- Table db.user
-- ----------------------------------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db`.`user` (
  `id` INT(11) NOT NULL ,
  `id_groupe` INT(11) NOT NULL ,
  `login` VARCHAR(45) NULL DEFAULT NULL ,
  `pass` VARCHAR(45) NULL DEFAULT NULL ,
  `access` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`, `id_groupe`) ,
  INDEX `fk_user_1_idx` (`id_groupe` ASC) ,
  CONSTRAINT `fk_user_1`
    FOREIGN KEY (`id_groupe` )
    REFERENCES `db`.`groupe` (`id_groupe` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
SET FOREIGN_KEY_CHECKS = 1;;
