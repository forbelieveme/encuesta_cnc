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

ALTER TABLE encuesta 
    ADD (f1 INT(3),
         f3 INT(3),
         f4 INT(3),
         f5 INT(3));

/*Cumplimiento de objetivos*/
ALTER TABLE encuesta 
    ADD (p1 VARCHAR(30),
        p2_1 INT(3),
        p2_2 INT(3),
        p2_3 INT(3),
        p2_4 INT(3),
        p2_5 INT(3),
        p2_6 INT(3),
        p2_7 INT(3),
        p2_8 INT(3),
        p2_9 INT(3),
        p2_10 INT(3),
        p3 INT(3),
        p4 VARCHAR(30),
        p5 INT(3));

/*Modelulo de compras*/
ALTER TABLE encuesta 
    ADD (p6 INT(3),
         p7 VARCHAR(30),
         p8 VARCHAR(30),
         p9 INT(3),
         p10 VARCHAR(30));

/*Modulo de Fidelización*/
ALTER TABLE encuesta 
    ADD (p11 INT(3),
         p12 VARCHAR(30),
         p13 INT(3),
         p14 INT(3),
         p15 INT(3));

/*Muestra Comercial*/
ALTER TABLE encuesta 
    ADD (p16 VARCHAR(30),
         p17 INT(3),
         P18 VARCHAR(30),
         p19_1 INT(3),
         p19_2 INT(3),
         p19_3 INT(3),
         p19_4 INT(3),
         p19_5 INT(3),
         p19_6 INT(3),
         p19_7 INT(3));

/*Servicios Básicos del recinto para el Vistante*/
ALTER TABLE encuesta 
    ADD (p20 VARCHAR(30),
         p21 INT(3),
         p22 VARCHAR(30),
         p23 INT(3),
         p24 VARCHAR(30),
         p25_1 INT(3),
         p25_2 INT(3),
         p25_3 INT(3),
         p25_4 INT(3),
         p25_5 INT(3),
         p25_6 INT(3),
         p26_1 INT(3),
         p26_2 INT(3),
         p26_3 INT(3),
         p26_4 INT(3),
         p26_5 INT(3),
         p27 VARCHAR(30),
         p28_1 INT(3),
         p28_2 INT(3),
         p28_3 INT(3),
         p28_4 INT(3),
         p28_5 INT(3),
         p28_6 INT(3),
         p29_1 INT(3),
         p29_2 INT(3),
         p29_3 INT(3));

        
/*Comunicaciones/Convocatoria */
ALTER TABLE encuesta 
    ADD (p30 INT(3),
         p31 VARCHAR(30),
         p32 INT(3),
         p33 VARCHAR(30));

/*Modulo de agenda de Actividades*/
ALTER TABLE encuesta 
    ADD (p34 INT(3),
         p35 VARCHAR(30),
         p36_1 INT(3),
         p36_2 INT(3),
         p37 INT(3),
         p38 VARCHAR(30),
         p39 VARCHAR(30));

/*Survey for action*/
ALTER TABLE encuesta 
    ADD (p40 VARCHAR(30),
         p41 VARCHAR(30),
         p42 VARCHAR(30));
         
/*Demográficos*/
ALTER TABLE encuesta 
    ADD (d1 INT(3),
         d2 INT(3),
         d3 INT(3),
         d4 VARCHAR(30));

/*Final*/
ALTER TABLE encuesta 
    ADD (p43 INT(3));

ALTER TABLE encuesta 
    ADD (cid VARCHAR(30));



/*INSERT INTO encuesta (nombres, apellidos, cedula, telefono, celular, correo) VALUES ("daniel", "jimenez", 1233509301, 7816288, 3024615600, "daniel.jose.@hotmail.com");

/*SELECT * FROM encuesta where id = 0;
