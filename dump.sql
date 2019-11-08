-- -----------------------------------------------------
-- Table `pp_criando_um_site_com_php`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pp_criando_um_site_com_php`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pp_criando_um_site_com_php`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pp_criando_um_site_com_php`.`pages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`, `users_id`),
  INDEX `fk_pages_users_idx` (`users_id` ASC),
  CONSTRAINT `fk_pages_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `pp_criando_um_site_com_php`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
