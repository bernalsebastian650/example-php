CREATE TABLE `proyectof`.`usuarios`
(
    `IdUsuarios` INT          NOT NULL AUTO_INCREMENT,
    `Nombre`     VARCHAR(128) NOT NULL,
    `Email`      VARCHAR(128) NOT NULL,
    `Clave`      VARCHAR(256) NOT NULL,
    `PreguntaS`  VARCHAR(256) NOT NULL,
    `Respuesta`  VARCHAR(256) NOT NULL,
    PRIMARY KEY (`IdUsuarios`)
) ENGINE = InnoDB;