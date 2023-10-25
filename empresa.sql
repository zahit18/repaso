CREATE DATABASE empresa;

CREATE TABLE empleado(
    id int primary key auto_increment,
    nombre varchar(120),
    edad int
);

INSERT INTO `empleado` (`id`, `nombre`, `edad`) VALUES
(1, 'Juan López', 30),
(2, 'Jorge García', 27),
(3, 'Pedro Álvarez', 54),
(4, 'Luis Sánchez', 40),
(5, 'Miguel Hernández', 35);


select * from empleado