CREATE DATABASE formulario;

USE formulario;

CREATE TABLE encuesta (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
nombres VARCHAR(30),
apellidos VARCHAR(30),
cedula INT(10),
telefono INT(7),
celular INT(10),
correo VARCHAR(30)
);

/*INSERT INTO encuesta (nombres, apellidos, cedula, telefono, celular, correo) VALUES ("daniel", "jimenez", 1233509301, 7816288, 3024615600, "daniel.jose.@hotmail.com");

/*SELECT * FROM encuesta where id = 0;
