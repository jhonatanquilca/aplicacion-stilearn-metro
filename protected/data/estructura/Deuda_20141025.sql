SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `actividad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `actividad` ;

CREATE TABLE IF NOT EXISTS `actividad` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `entidad_tipo` VARCHAR(64) NOT NULL,
  `entidad_id` INT(11) NOT NULL,
  `tipo` ENUM('CREATE','UPDATE','DELETE','RESTORE') NOT NULL,
  `usuario_id` INT(11) NOT NULL,
  `fecha` DATETIME NOT NULL,
  `detalle` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clt_cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clt_cliente` ;

CREATE TABLE IF NOT EXISTS `clt_cliente` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(32) NOT NULL,
  `apellido` VARCHAR(32) NOT NULL,
  `documento` VARCHAR(20) NULL,
  `telefono` VARCHAR(24) NULL DEFAULT NULL,
  `celular` VARCHAR(24) NULL DEFAULT NULL,
  `email_1` VARCHAR(255) NULL,
  `email_2` VARCHAR(255) NULL DEFAULT NULL,
  `estado` ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
  `usuario_creacion_id` INT(11) NOT NULL,
  `usuario_actualizacion_id` INT(11) NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `fecha_actualizacion` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clt_deuda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clt_deuda` ;

CREATE TABLE IF NOT EXISTS `clt_deuda` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `monto` DOUBLE NOT NULL,
  `usuario_creacion_id` INT(11) NOT NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `usuario_actualizacion_id` INT(11) NULL,
  `fecha_actualizacion` DATETIME NULL,
  `clt_cliente_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_clt_deuda_clt_cliente1_idx` (`clt_cliente_id` ASC),
  CONSTRAINT `fk_clt_deuda_clt_cliente1`
    FOREIGN KEY (`clt_cliente_id`)
    REFERENCES `clt_cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tx_descripcion_palntilla`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tx_descripcion_palntilla` ;

CREATE TABLE IF NOT EXISTS `tx_descripcion_palntilla` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` TEXT NOT NULL,
  `estado` ENUM('ACTIVO','INACTIVO') NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tx_trasaccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tx_trasaccion` ;

CREATE TABLE IF NOT EXISTS `tx_trasaccion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `monto_cuota` DOUBLE NOT NULL,
  `tipo` ENUM('ADEUDAR','PAGAR') NULL,
  `observaciones` TEXT NULL DEFAULT NULL,
  `usuario_creacion_id` INT(11) NOT NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `usuario_actualizacion_id` INT(11) NULL,
  `fecha_actualizacion` DATETIME NULL,
  `clt_deuda_id` INT(11) NOT NULL,
  `tx_descripcion_palntilla_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tx_trasaccion_clt_deuda1_idx` (`clt_deuda_id` ASC),
  INDEX `fk_tx_trasaccion_tx_descripcion_palntilla1_idx` (`tx_descripcion_palntilla_id` ASC),
  CONSTRAINT `fk_tx_trasaccion_clt_deuda1`
    FOREIGN KEY (`clt_deuda_id`)
    REFERENCES `clt_deuda` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tx_trasaccion_tx_descripcion_palntilla1`
    FOREIGN KEY (`tx_descripcion_palntilla_id`)
    REFERENCES `tx_descripcion_palntilla` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mail_plantilla`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mail_plantilla` ;

CREATE TABLE IF NOT EXISTS `mail_plantilla` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(64) NOT NULL,
  `mensaje` LONGTEXT NOT NULL,
  `estado` ENUM('ACTIVO','INACTIVO') NOT NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `fecha_actualizacion` DATETIME NULL DEFAULT NULL,
  `usuario_creacion_id` INT(11) NOT NULL,
  `usuario_actualizacion_id` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mail`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mail` ;

CREATE TABLE IF NOT EXISTS `mail` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `asunto` VARCHAR(200) NULL DEFAULT NULL,
  `contenido` LONGTEXT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `fecha_envio` DATETIME NULL,
  `usuario_creacion_id` INT(11) NOT NULL,
  `estado` ENUM('PENDIENTE','ENVIADO','NO_ENVIADO') NOT NULL DEFAULT 'PENDIENTE',
  `contacto_id` VARCHAR(45) NOT NULL,
  `plantilla_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_mail_mail_plantilla1_idx` (`plantilla_id` ASC),
  CONSTRAINT `fk_mail_mail_plantilla1`
    FOREIGN KEY (`plantilla_id`)
    REFERENCES `mail_plantilla` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cruge_authitem`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_authitem` ;

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` VARCHAR(64) NOT NULL,
  `type` INT(11) NOT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `bizrule` TEXT NULL DEFAULT NULL,
  `data` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_user` ;

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` INT(11) NOT NULL AUTO_INCREMENT,
  `regdate` BIGINT(30) NULL DEFAULT NULL,
  `actdate` BIGINT(30) NULL DEFAULT NULL,
  `logondate` BIGINT(30) NULL DEFAULT NULL,
  `username` VARCHAR(64) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(64) NULL DEFAULT NULL COMMENT 'Hashed password',
  `authkey` VARCHAR(100) NULL DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` INT(11) NULL DEFAULT '0',
  `totalsessioncounter` INT(11) NULL DEFAULT '0',
  `currentsessioncounter` INT(11) NULL DEFAULT '0',
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_authassignment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_authassignment` ;

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` INT(11) NOT NULL,
  `bizrule` TEXT NULL DEFAULT NULL,
  `data` TEXT NULL DEFAULT NULL,
  `itemname` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`userid`, `itemname`),
  INDEX `fk_cruge_authassignment_cruge_authitem1` (`itemname` ASC),
  INDEX `fk_cruge_authassignment_user` (`userid` ASC),
  CONSTRAINT `fk_cruge_authassignment_cruge_authitem1`
    FOREIGN KEY (`itemname`)
    REFERENCES `cruge_authitem` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_authassignment_user`
    FOREIGN KEY (`userid`)
    REFERENCES `cruge_user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_authitemchild`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_authitemchild` ;

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` VARCHAR(64) NOT NULL,
  `child` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`parent`, `child`),
  INDEX `child` (`child` ASC),
  CONSTRAINT `crugeauthitemchild_ibfk_1`
    FOREIGN KEY (`parent`)
    REFERENCES `cruge_authitem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2`
    FOREIGN KEY (`child`)
    REFERENCES `cruge_authitem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_field`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_field` ;

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` INT(11) NOT NULL AUTO_INCREMENT,
  `fieldname` VARCHAR(20) NOT NULL,
  `longname` VARCHAR(50) NULL DEFAULT NULL,
  `position` INT(11) NULL DEFAULT '0',
  `required` INT(11) NULL DEFAULT '0',
  `fieldtype` INT(11) NULL DEFAULT '0',
  `fieldsize` INT(11) NULL DEFAULT '20',
  `maxlength` INT(11) NULL DEFAULT '45',
  `showinreports` INT(11) NULL DEFAULT '0',
  `useregexp` VARCHAR(512) NULL DEFAULT NULL,
  `useregexpmsg` VARCHAR(512) NULL DEFAULT NULL,
  `predetvalue` MEDIUMBLOB NULL DEFAULT NULL,
  PRIMARY KEY (`idfield`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_fieldvalue`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_fieldvalue` ;

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` INT(11) NOT NULL AUTO_INCREMENT,
  `iduser` INT(11) NOT NULL,
  `idfield` INT(11) NOT NULL,
  `value` BLOB NULL DEFAULT NULL,
  PRIMARY KEY (`idfieldvalue`),
  INDEX `fk_cruge_fieldvalue_cruge_user1` (`iduser` ASC),
  INDEX `fk_cruge_fieldvalue_cruge_field1` (`idfield` ASC),
  CONSTRAINT `fk_cruge_fieldvalue_cruge_user1`
    FOREIGN KEY (`iduser`)
    REFERENCES `cruge_user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_field1`
    FOREIGN KEY (`idfield`)
    REFERENCES `cruge_field` (`idfield`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_session`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_session` ;

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` INT(11) NOT NULL AUTO_INCREMENT,
  `iduser` INT(11) NOT NULL,
  `created` BIGINT(30) NULL DEFAULT NULL,
  `expire` BIGINT(30) NULL DEFAULT NULL,
  `status` INT(11) NULL DEFAULT '0',
  `ipaddress` VARCHAR(45) NULL DEFAULT NULL,
  `usagecount` INT(11) NULL DEFAULT '0',
  `lastusage` BIGINT(30) NULL DEFAULT NULL,
  `logoutdate` BIGINT(30) NULL DEFAULT NULL,
  `ipaddressout` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  INDEX `crugesession_iduser` (`iduser` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cruge_system`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cruge_system` ;

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `largename` VARCHAR(45) NULL DEFAULT NULL,
  `sessionmaxdurationmins` INT(11) NULL DEFAULT '30',
  `sessionmaxsameipconnections` INT(11) NULL DEFAULT '10',
  `sessionreusesessions` INT(11) NULL DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` INT(11) NULL DEFAULT '-1',
  `sessionmaxsessionsperuser` INT(11) NULL DEFAULT '-1',
  `systemnonewsessions` INT(11) NULL DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` INT(11) NULL DEFAULT '0',
  `registerusingcaptcha` INT(11) NULL DEFAULT '0',
  `registerusingterms` INT(11) NULL DEFAULT '0',
  `terms` BLOB NULL DEFAULT NULL,
  `registerusingactivation` INT(11) NULL DEFAULT '1',
  `defaultroleforregistration` VARCHAR(64) NULL DEFAULT NULL,
  `registerusingtermslabel` VARCHAR(100) NULL DEFAULT NULL,
  `registrationonlogin` INT(11) NULL DEFAULT '1',
  PRIMARY KEY (`idsystem`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
