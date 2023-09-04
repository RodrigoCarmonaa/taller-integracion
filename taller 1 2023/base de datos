CREATE TABLE `login` (
  `correo_usuario` VARCHAR,
  `contraseña` VARCHAR,
  `ID_usuario` INT,
  PRIMARY KEY (`correo_usuario`)
);

CREATE TABLE `Agenda ` (
  `calendario ` VARCHAR ,
  `ID_usuario` INT,
  `IDsigla_curso` INT,
  `ID_sala` INT,
  `calculadora` INT,
  `asistencia ` INT,
  `Ramos` CHAR,
  PRIMARY KEY (`calendario `)
);

CREATE TABLE `Ramos ` (
  `IDsigla_curso` INT,
  `horario` DATE,
  `Profesor` CHAR,
  `seccion` INT,
  `dia ` VARCHAR,
  PRIMARY KEY (`IDsigla_curso`),
  FOREIGN KEY (`IDsigla_curso`) REFERENCES `Agenda `(`IDsigla_curso`)
);

CREATE TABLE `salas` (
  `ID_sala` INT,
  `campus` CHAR,
  `edificio` CHAR,
  `piso` INT,
  `numero_sala` INT,
  PRIMARY KEY (`ID_sala`),
  FOREIGN KEY (`ID_sala`) REFERENCES `Agenda `(`ID_sala`)
);

CREATE TABLE `usuario` (
  `Nombre` char,
  `Apellido` char,
  `Correo_electronico` varchar,
  `ID_usuario` INT,
  `admin` VARCHAR,
  PRIMARY KEY (`ID_usuario`),
  FOREIGN KEY (`ID_usuario`) REFERENCES `login`(`ID_usuario`)
);

