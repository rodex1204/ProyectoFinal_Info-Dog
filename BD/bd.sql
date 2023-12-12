CREATE DATABASE infodog;
USE infodog;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidop VARCHAR(100) NOT NULL,
    apellidom VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE,
    contrasena VARCHAR(100) NOT NULL
);

CREATE TABLE alimentacion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    etapa VARCHAR(100) NOT NULL,
    alimento TEXT NOT NULL,
    cantidad VARCHAR(50) NOT NULL
);

INSERT INTO alimentacion(etapa, alimento, cantidad)
VALUES 
    ('Cachorro', 'Necesitan dietas ricas en calorías y nutrientes para respaldar el crecimiento. Los alimentos para cachorros suelen contener más proteínas y grasas.', 'Ración Diaria: Aproximadamente 40-120 gramos.'),
    ('Cachorro', 'Necesitan dietas ricas en calorías y nutrientes para respaldar el crecimiento. Los alimentos para cachorros suelen contener más proteínas y grasas.', 'Ración Diaria: Aproximadamente 120-200 gramos.'),
    ('Cachorro', 'Necesitan dietas ricas en calorías y nutrientes para respaldar el crecimiento. Los alimentos para cachorros suelen contener más proteínas y grasas.', 'Ración Diaria: Aproximadamente 200-350 gramos.'),
    ('Cachorro', 'Necesitan dietas ricas en calorías y nutrientes para respaldar el crecimiento. Los alimentos para cachorros suelen contener más proteínas y grasas.', 'Ración Diaria: Aproximadamente 350-450 gramos.'),
    ('Cachorro', 'Necesitan dietas ricas en calorías y nutrientes para respaldar el crecimiento. Los alimentos para cachorros suelen contener más proteínas y grasas.', 'Ración Diaria: Aproximadamente 450-550 gramos.'),
    
    ('Adulto', 'Requieren una dieta equilibrada para mantener la salud y el peso adecuado.', 'Ración Diaria: Aproximadamente 40-120 gramos.'),
    ('Adulto', 'Requieren una dieta equilibrada para mantener la salud y el peso adecuado.', 'Ración Diaria: Aproximadamente 120-200 gramos.'),
    ('Adulto', 'Requieren una dieta equilibrada para mantener la salud y el peso adecuado.', 'Ración Diaria: Aproximadamente 200-350 gramos.'),
    ('Adulto', 'Requieren una dieta equilibrada para mantener la salud y el peso adecuado.', 'Ración Diaria: Aproximadamente 350-450 gramos.'),
    ('Adulto', 'Requieren una dieta equilibrada para mantener la salud y el peso adecuado.', 'Ración Diaria: Aproximadamente 450-550 gramos.'),
    
    ('Ancianos/Senior', 'Pueden necesitar alimentos bajos en calorías y ricos en nutrientes específicos para abordar problemas de salud comunes en perros mayores, como la salud articular.', 'Ración Diaria: Aproximadamente 40-120 gramos.'),
    ('Ancianos/Senior', 'Pueden necesitar alimentos bajos en calorías y ricos en nutrientes específicos para abordar problemas de salud comunes en perros mayores, como la salud articular.', 'Ración Diaria: Aproximadamente 120-200 gramos.'),
    ('Ancianos/Senior', 'Pueden necesitar alimentos bajos en calorías y ricos en nutrientes específicos para abordar problemas de salud comunes en perros mayores, como la salud articular.', 'Ración Diaria: Aproximadamente 200-350 gramos.'),
    ('Ancianos/Senior', 'Pueden necesitar alimentos bajos en calorías y ricos en nutrientes específicos para abordar problemas de salud comunes en perros mayores, como la salud articular.', 'Ración Diaria: Aproximadamente 350-450 gramos.'),
    ('Ancianos/Senior', 'Pueden necesitar alimentos bajos en calorías y ricos en nutrientes específicos para abordar problemas de salud comunes en perros mayores, como la salud articular.', 'Ración Diaria: Aproximadamente 450-550 gramos.');

CREATE TABLE vacunas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    enfermedad VARCHAR(100) NOT NULL,
    etapa VARCHAR(50) NOT NULL
);

/*TRIGGERS:*/

CREATE TABLE usuarios_reg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidop VARCHAR(100) NOT NULL,
    apellidom VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE,
    contrasena VARCHAR(100) NOT NULL, 
    registro datetime 
);

create trigger usuarios_t after insert on usuarios for each ROW
insert into usuarios_reg(id, nombre, apellidop, apellidom, correo, contrasena, registro)
values (new.id, new.nombre, new.apellidop, new.apellidom, new.correo, new.contrasena, now());

CREATE TABLE vacunas_reg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    enfermedad VARCHAR(100) NOT NULL,
    etapa VARCHAR(50) NOT NULL,
    registro datetime
);

create trigger vacunas_t after delete on vacunas for each ROW
insert into vacunas_reg(id, nombre, enfermedad, etapa, registro)
values (OLD.id, OLD.nombre, OLD.enfermedad, OLD.etapa, now());

