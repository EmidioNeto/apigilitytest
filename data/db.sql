CREATE TABLE `teste`.`music_dataset` (
  `id` INT NOT NULL,
  `song` VARCHAR(255) NOT NULL,
  `year` INT NOT NULL,
  `artist` VARCHAR(255) NOT NULL,
  `genre` VARCHAR(255) NOT NULL,
  `lyrics` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `IDX_YEAR` (`year` ASC),
  INDEX `IDX_GENRE` USING BTREE (`genre` ASC));
