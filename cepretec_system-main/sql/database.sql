CREATE DATABASE cepretec_system;
USE cepretec_system;

-- ============================================
-- 1. TABLA: usuarios
-- ============================================
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(20) NOT NULL UNIQUE,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol ENUM('superadmin', 'admin', 'alumno') NOT NULL DEFAULT 'alumno',
    estado TINYINT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- 2. TABLA: programas (carreras)
-- ============================================
CREATE TABLE programas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL UNIQUE,
    duracion VARCHAR(50) NOT NULL,
    descripcion TEXT,
    estado TINYINT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- 3. TABLA: etapas (Cepre I, II, III)
-- ============================================
CREATE TABLE etapas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    anio INT NOT NULL,
    activo TINYINT DEFAULT 0,
    estado TINYINT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- 4. TABLA: docentes
-- ============================================
CREATE TABLE docentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(20) NOT NULL UNIQUE,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100),
    telefono VARCHAR(20),
    email VARCHAR(100),
    estado TINYINT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- 5. TABLA: examenes
-- ============================================
CREATE TABLE examenes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    etapa_id INT NOT NULL,
    fecha_examen DATE,
    estado TINYINT DEFAULT 1,
    FOREIGN KEY (etapa_id) REFERENCES etapas(id)
);

-- ============================================
-- 6. TABLA: alumnos
-- ============================================
CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    programa_id INT NOT NULL,
    etapa_id INT NOT NULL,
    estado_matricula ENUM('activo', 'pendiente', 'cancelado', 'graduado') DEFAULT 'pendiente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (programa_id) REFERENCES programas(id),
    FOREIGN KEY (etapa_id) REFERENCES etapas(id)
);

-- ============================================
-- 7. TABLA: matriculas
-- ============================================
CREATE TABLE matriculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumno_id INT NOT NULL,
    etapa_id INT NOT NULL,
    fecha_matricula DATE NOT NULL,
    estado ENUM('activa', 'cancelada', 'completada') DEFAULT 'activa',
    observacion TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (alumno_id) REFERENCES alumnos(id),
    FOREIGN KEY (etapa_id) REFERENCES etapas(id)
);

-- ============================================
-- 8. TABLA: notas
-- ============================================
CREATE TABLE notas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumno_id INT NOT NULL,
    examen_id INT NOT NULL,
    nota DECIMAL(5,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (alumno_id) REFERENCES alumnos(id),
    FOREIGN KEY (examen_id) REFERENCES examenes(id),
    UNIQUE KEY unique_nota (alumno_id, examen_id)
);

-- ============================================
-- 9. TABLA: asistencia_alumnos
-- ============================================
CREATE TABLE asistencia_alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumno_id INT NOT NULL,
    fecha DATE NOT NULL,
    estado_asistencia ENUM('presente', 'tarde', 'ausente', 'justificado') DEFAULT 'ausente',
    hora_ingreso TIME,
    observacion TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (alumno_id) REFERENCES alumnos(id),
    UNIQUE KEY unique_asistencia (alumno_id, fecha)
);

-- ============================================
-- 10. TABLA: asistencia_docentes
-- ============================================
CREATE TABLE asistencia_docentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    docente_id INT NOT NULL,
    fecha DATE NOT NULL,
    estado_asistencia ENUM('presente', 'tarde', 'ausente', 'justificado') DEFAULT 'ausente',
    hora_ingreso TIME,
    observacion TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (docente_id) REFERENCES docentes(id),
    UNIQUE KEY unique_asistencia_docente (docente_id, fecha)
);

-- ============================================
-- INSERTAR DATOS INICIALES
-- ============================================

-- Usuarios (1 por cada rol)
INSERT INTO usuarios (dni, nombres, apellidos, email, password, rol) VALUES
('00000000', 'Super', 'Admin', 'super@cepretec.com', 'admin123', 'superadmin'),
('11111111', 'Admin', 'Principal', 'admin@cepretec.com', 'admin123', 'admin'),
('12345678', 'Juan', 'Pérez', 'alumno@cepretec.com', 'alumno123', 'alumno');

-- Programas (7 carreras)
INSERT INTO programas (nombre, duracion, descripcion) VALUES
('Farmacia Técnica', '3 años', 'Atención farmacéutica y dispensación de medicamentos'),
('Arquitectura de Plataformas y Servicios de TI', '3 años', 'Infraestructura tecnológica y cloud computing'),
('Electrónica Industrial', '3 años', 'Sistemas electrónicos industriales y automatización'),
('Enfermería Técnica', '3 años', 'Cuidados de salud y atención hospitalaria'),
('Asistencia Administrativa', '2 años', 'Gestión documentaria y organización de oficinas'),
('Guía Oficial de Turismo', '2 años', 'Turismo, patrimonio cultural e idiomas'),
('Mecatrónica Automotriz', '3 años', 'Sistemas electrónicos y mecánicos automotrices');

-- Etapas
INSERT INTO etapas (nombre, anio, activo) VALUES
('Cepre I - 2026', 2026, 1),
('Cepre II - 2026', 2026, 0),
('Cepre III - 2026', 2026, 0);

-- Exámenes
INSERT INTO examenes (nombre, etapa_id, fecha_examen) VALUES
('Examen 1', 1, '2026-03-15'),
('Examen 2', 1, '2026-05-10'),
('Examen 3', 1, '2026-07-20');

-- Alumno (usuario_id = 3 es Juan Pérez)
INSERT INTO alumnos (usuario_id, programa_id, etapa_id, estado_matricula) VALUES
(3, 2, 1, 'activo');

-- Matrícula
INSERT INTO matriculas (alumno_id, etapa_id, fecha_matricula, estado) VALUES
(1, 1, CURDATE(), 'activa');

-- Docentes
INSERT INTO docentes (dni, nombres, apellidos, especialidad, telefono, email) VALUES
('77777777', 'Carlos', 'Mendoza', 'Matemática', '987654321', 'carlos@cepretec.com'),
('88888888', 'Rosa', 'Quispe', 'Comunicación', '987654322', 'rosa@cepretec.com');