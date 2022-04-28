CREATE TABLE `users`.`users` ( `ID` INT(11) NOT NULL , `Codigo` INT(11) NOT NULL , `Nombre` VARCHAR(255) NOT NULL , `Contraseña` VARCHAR(100) NOT NULL , `Fecha` DATE NOT NULL , `Activo` BOOLEAN NOT NULL ) ENGINE = InnoDB;

INSERT INTO `users`(`ID`, `Codigo`, `Nombre`, `Contraseña`, `Fecha`, `Activo`) VALUES ('007','111','Manel','patata','01-01-2000','true');

INSERT INTO `users`(`ID`, `Codigo`, `Nombre`, `Contraseña`, `Fecha`, `Activo`) VALUES ('008','2','maria','secret','01-01-2015','false');
