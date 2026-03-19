
CREATE DATABASE sist_notas DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use sist_notas;

create table estudiantes (
id_estudiante int primary key not null auto_increment,
cedula varchar(50) not null unique,
nombre varchar(50) not null,
apellido varchar(50) not null,
email varchar(100) not null unique,   
telefono varchar(20) not null
)engine=innoDB;

create table profesores (
    id_profesor int primary key not null auto_increment,
    cedula varchar(50) not null unique,
    nombre varchar(50) not null,    
    apellido varchar(50) not null,
    email varchar(100) not null unique,
    telefono varchar(20) not null
)engine=innoDB;

create table materia (
    id_materia int primary key not null auto_increment,
    nom_materia varchar(100) not null unique,
    fk_profesor int not null,
    FOREIGN KEY (fk_profesor) REFERENCES profesores(id_profesor)
)engine=innoDB;

create table inscripcion(
    id_inscripcion int primary key not null auto_increment,
    fk_estudiante int not null,
    fk_materia int not null,
    fecha_inscripcion date not null,
    FOREIGN KEY (fk_estudiante) REFERENCES estudiantes(id_estudiante),
    FOREIGN KEY (fk_materia) REFERENCES materia(id_materia)
)engine=innoDB;

create table notas(
    id_notas int primary key not null auto_increment,
    fk_estudiante int not null,
    fk_materia int not null,
    primer_corte decimal(10,2), /* 25% DE LA NOTA */
    segundo_corte decimal(10,2), /* 25% DE LA NOTA */
    tercer_corte decimal(10,2), /* 25% DE LA NOTA */
    cuarto_corte decimal(10,2), /* 25% DE LA NOTA */
    nota_final decimal(10,2) AS (primer_corte + segundo_corte + tercer_corte + cuarto_corte)STORED,
    FOREIGN KEY (fk_estudiante) REFERENCES estudiantes(id_estudiante),
    FOREIGN KEY (fk_materia) REFERENCES materia(id_materia)
)engine=innoDB;


