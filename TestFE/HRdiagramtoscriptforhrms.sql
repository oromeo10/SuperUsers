-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema hrms
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hrms
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hrms` DEFAULT CHARACTER SET utf8 ;
USE `hrms` ;

-- -----------------------------------------------------
-- Table `hrms`.`benefits`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`benefits` (
  `EID` INT(11) NOT NULL,
  `ret` TINYINT(1) NULL DEFAULT NULL COMMENT 'designates availability of 401k retirement plan ',
  `Vision` TINYINT(1) NULL DEFAULT NULL,
  `Dental` TINYINT(1) NULL DEFAULT NULL,
  `Temp_dis` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`EID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`credentials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`credentials` (
  `Languages` VARCHAR(15) NOT NULL,
  `Year_exper` INT(11) NOT NULL,
  `Educ_level` VARCHAR(15) NOT NULL,
  `Certificattions` VARCHAR(30) NOT NULL,
  `Reference` VARCHAR(15) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`employee` (
  `EID` INT NOT NULL AUTO_INCREMENT,
  `f_name` VARCHAR(15) NOT NULL,
  `m_initial` VARCHAR(1) NULL DEFAULT NULL,
  `l_name` VARCHAR(15) NOT NULL,
  `E_ssn` CHAR(9) NOT NULL,
  `E_phone` CHAR(10) NOT NULL,
  `E_city` VARCHAR(15) NOT NULL,
  `E_street` VARCHAR(40) NOT NULL,
  `E_state` VARCHAR(5) NOT NULL,
  `E_email` VARCHAR(40) NOT NULL,
  `Date_of_hire` DATE NOT NULL,
  `D_ID` INT NOT NULL,
  `S_ID` INT NOT NULL,
  `dbirth` DATE NOT NULL,
  `gender` CHAR(1) NOT NULL,
  `dep_contact` CHAR(15) NOT NULL,
  `disability` CHAR(1) NOT NULL,
  `ethnicity` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`EID`, `E_ssn`),
  UNIQUE INDEX `EID_UNIQUE` (`EID` ASC),
  INDEX `D_ID_idx` (`D_ID` ASC),
  INDEX `S_ID_idx` (`S_ID` ASC),
  CONSTRAINT `D_ID`
    FOREIGN KEY (`D_ID`)
    REFERENCES `hrms`.`department` (`DID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `S_ID`
    FOREIGN KEY (`S_ID`)
    REFERENCES `hrms`.`department` (`SID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`store`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`store` (
  `SID` INT NOT NULL,
  `S_phone` CHAR(10) NOT NULL,
  `S_mgrID` INT NULL,
  `S_city` VARCHAR(45) NOT NULL,
  `S_state` VARCHAR(45) NOT NULL,
  `S_zip` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`SID`),
  INDEX `mgrID_idx` (`S_mgrID` ASC),
  CONSTRAINT `mgrID`
    FOREIGN KEY (`S_mgrID`)
    REFERENCES `hrms`.`employee` (`EID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`department` (
  `DID` INT NOT NULL AUTO_INCREMENT,
  `D_name` VARCHAR(15) NOT NULL,
  `D_mgrID` INT(11) NULL,
  `SID` INT NOT NULL,
  PRIMARY KEY (`DID`, `SID`),
  INDEX `SID_idx` (`SID` ASC),
  INDEX `mgrID_idx` (`D_mgrID` ASC),
  UNIQUE INDEX `DID_UNIQUE` (`DID` ASC),
  UNIQUE INDEX `D_mgrID_UNIQUE` (`D_mgrID` ASC),
  CONSTRAINT `SID`
    FOREIGN KEY (`SID`)
    REFERENCES `hrms`.`store` (`SID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `mgr_ID`
    FOREIGN KEY (`D_mgrID`)
    REFERENCES `hrms`.`employee` (`EID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`position`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`position` (
  `POSID` INT(11) NOT NULL AUTO_INCREMENT,
  `POS_name` VARCHAR(30) NOT NULL,
  `Job_Type` VARCHAR(45) NOT NULL,
  `Hourly` DECIMAL(11,2) NULL DEFAULT NULL,
  `Salary` DECIMAL(11,2) NULL DEFAULT NULL,
  `EID` INT NULL,
  `Dep_ID` INT NOT NULL,
  PRIMARY KEY (`POSID`, `Dep_ID`),
  INDEX `hiredPosition_idx` (`EID` ASC),
  UNIQUE INDEX `EID_UNIQUE` (`EID` ASC),
  INDEX `inDept_idx` (`Dep_ID` ASC),
  CONSTRAINT `hiredPosition`
    FOREIGN KEY (`EID`)
    REFERENCES `hrms`.`employee` (`EID`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION,
  CONSTRAINT `inDept`
    FOREIGN KEY (`Dep_ID`)
    REFERENCES `hrms`.`department` (`DID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`training`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`training` (
  `L_train` INT(11) NOT NULL,
  `T_start` DATE NOT NULL,
  `Trainer` VARCHAR(15) NOT NULL,
  `POSID` INT(11) NOT NULL,
  PRIMARY KEY (`POSID`),
  CONSTRAINT `POSID`
    FOREIGN KEY (`POSID`)
    REFERENCES `hrms`.`position` (`POSID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `hrms`.`register`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`register` (
  `u_name` VARCHAR(40) NOT NULL,
  `s_id` INT NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `u_pass` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`s_id`))
ENGINE = InnoDB;

USE `hrms` ;

-- -----------------------------------------------------
-- Placeholder table for view `hrms`.`departmentView`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`departmentView` (`D_name` INT, `SID` INT);

-- -----------------------------------------------------
-- Placeholder table for view `hrms`.`EmpList`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrms`.`EmpList` (`EID` INT, `f_name` INT, `m_initial` INT, `l_name` INT, `E_ssn` INT, `E_phone` INT, `E_city` INT, `E_street` INT, `E_state` INT, `E_email` INT, `Date_of_hire` INT, `D_ID` INT, `S_ID` INT, `dbirth` INT, `gender` INT, `dep_contact` INT, `disability` INT, `ethnicity` INT, `POS_name` INT, `Job_Type` INT);

-- -----------------------------------------------------
-- View `hrms`.`departmentView`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hrms`.`departmentView`;
USE `hrms`;
CREATE OR REPLACE VIEW `departmentView` AS
    SELECT a.D_name,b.SID
FROM hrms.department AS a
	INNER JOIN hrms.store AS b
	ON a.SID=b.SID;

-- -----------------------------------------------------
-- View `hrms`.`EmpList`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hrms`.`EmpList`;
USE `hrms`;
CREATE OR REPLACE VIEW `EmpList` AS

SELECT a.*,b.POS_name,b.Job_Type
FROM hrms.employee AS a
	INNER JOIN hrms.position AS b
ON a.EID=b.EID;

INSERT INTO `hrms`.`register`
(`u_name`,
`s_id`,
`email`,
`u_pass`)
VALUES ('root', 1, 'root@hr.com','root');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
