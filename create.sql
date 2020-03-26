CREATE TABLE `bekus`.`requests` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `user` VARCHAR(255) NOT NULL , `compliment` TEXT NOT NULL , `upload_date` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `bekus`.`admins` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`username`)) ENGINE = InnoDB;

CREATE TABLE `bekus`.`contributors` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `instagram_id` VARCHAR(255) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `bekus`.`compliments` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `sex` VARCHAR(10) NOT NULL , `value` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;