-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hrdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hrdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hrdb` DEFAULT CHARACTER SET utf8 ;
USE `hrdb` ;

-- -----------------------------------------------------
-- Table `hrdb`.`Department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Department` (
  `Department_Name` INT UNSIGNED NOT NULL,
  `DID` INT NOT NULL,
  `D_ name` VARCHAR(15) NOT NULL,
  `D_manager` VARCHAR(15) NOT NULL,
  `SID` INT NOT NULL,
  PRIMARY KEY (`DID`, `SID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Store`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Store` (
  `SID` INT NOT NULL,
  `S_name` VARCHAR(15) NOT NULL,
  `S_phone` INT UNSIGNED NOT NULL,
  `S_manager` VARCHAR(15) NOT NULL,
  `S_address` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`SID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Employee` (
  `EID` INT NOT NULL,
  `f_name` VARCHAR(15) NOT NULL,
  `m_initial` VARCHAR(1) NULL,
  `l_name` VARCHAR(1) NOT NULL,
  `e_name` VARCHAR(31) NOT NULL,
  `E_ssn` CHAR(9) NOT NULL,
  `E_phone` INT NOT NULL,
  `E_city` VARCHAR(15) NOT NULL,
  `E_street` VARCHAR(20) NOT NULL,
  `E_state` VARCHAR(5) NOT NULL,
  `E_address` VARCHAR(43) NOT NULL,
  `E_email` VARCHAR(20) NOT NULL,
  `Date_of_hire` DATE NOT NULL,
  `l_of_employment` INT NOT NULL,
  `D_ID` INT NOT NULL,
  `S_ID` INT NOT NULL,
  PRIMARY KEY (`EID`, `E_ssn`),
  INDEX `D_ID_idx` (`D_ID` ASC),
  INDEX `S_ID_idx` (`S_ID` ASC),
  CONSTRAINT `D_ID`
    FOREIGN KEY (`D_ID`)
    REFERENCES `hrdb`.`Department` (`DID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `S_ID`
    FOREIGN KEY (`S_ID`)
    REFERENCES `hrdb`.`Store` (`SID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Position`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Position` (
  `POSID` INT NOT NULL,
  `POS_name` VARCHAR(15) NOT NULL,
  `POS_type` VARCHAR(15) NOT NULL,
  `Job_Type` VARCHAR(45) NOT NULL,
  `Hourly` INT NULL,
  `Salary` INT NULL,
  `Manager` VARCHAR(15) NOT NULL,
  `EID` INT NOT NULL,
  PRIMARY KEY (`POSID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Training`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Training` (
  `L_train` INT NOT NULL,
  `T_start` DATE NOT NULL,
  `Trainer` VARCHAR(15) NOT NULL,
  `POSID` INT NOT NULL,
  `Date_of_hire` DATE NOT NULL,
  PRIMARY KEY (`POSID`, `Date_of_hire`),
  CONSTRAINT `POSID`
    FOREIGN KEY (`POSID`)
    REFERENCES `hrdb`.`Position` (`POSID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Demographics`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Demographics` (
  `Gender` CHAR NOT NULL,
  `Ethnicity` VARCHAR(15) NOT NULL,
  `Disability` TINYINT(1) NOT NULL,
  `EID` INT NOT NULL,
  PRIMARY KEY (`EID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Benefits`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Benefits` (
  `ret` TINYINT(1) NULL,
  `Vision` TINYINT(1) NULL,
  `Dental` TINYINT(1) NULL,
  `Temp_dis` TINYINT(1) NULL,
  `EID` INT NOT NULL,
  PRIMARY KEY (`EID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrdb`.`Credentials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrdb`.`Credentials` (
  `Languages` VARCHAR(15) NOT NULL,
  `Year_exper` INT NOT NULL,
  `Educ_level` VARCHAR(15) NOT NULL,
  `Certificattions` VARCHAR(30) NOT NULL,
  `Reference` VARCHAR(15) NOT NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
