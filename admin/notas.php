<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/notas.css">
</head>
<body>

<div class="dashboard-container">

    <aside class="sidebar">
        <h2>CEPRETEC</h2>
        <ul>
            <li><a href="dashboard.php">📊 Dashboard</a></li>
            <li><a href="alumnos.php">👥 Alumnos</a></li>
            <li><a href="matriculas.php">📝 Matrículas</a></li>
            <li><a href="asistencia.php">✅ Asistencia</a></li>
            <li><a href="notas.php">⭐ Notas</a></li>
            <li><a href="ranking.php">🏆 Ranking</a></li>
            <li><a href="programas.php">🎓 Programas</a></li>
            <li><a href="reportes.php">📄 Reportes</a></li>
            <li><a href="../logout.php">🚪 Cerrar Sesión</a></li>
        </ul>
    </aside>

    <main class="content">
        <h1>⭐ Gestión de Notas</h1>
        
        <div class="filtros-notas">
            <select>
                <option>Todos los programas</option>
                <option>Farmacia Técnica</option>
                <option>Arquitectura de Plataformas y Servicios de TI</option>
                <option>Electrónica Industrial</option>
                <option>Enfermería Técnica</option>
                <option>Asistencia Administrativa</option>
                <option>Guía Oficial de Turismo</option>
                <option>Mecatrónica Automotriz</option>
            </select>
            <select><option>Cepre I - 2026</option><option>Cepre II - 2026</option></select>
            <select><option>Todos los cursos</option><option>Matemática</option><option>Comunicación</option></select>
            <button>🔍 Consultar</button>
            <button>📊 Reporte de Notas</button>
        </div>
        
        <div class="promedio-general">
            <div><div class="label">Promedio General del Cepre I - 2026</div><div class="valor">15.8</div></div>
            <div><div class="label">Total Aprobados</div><div class="valor">142</div></div>
            <div><div class="label">Total Desaprobados</div><div class="valor">28</div></div>
        </div>
        
        <div class="table-container">
            <table>
                <thead><tr><th>DNI</th><th>Alumno</th><th>Programa</th><th>Matemática</th><th>Comunicación</th><th>R. Verbal</th><th>R. Matemático</th><th>Ciencia</th><th>Promedio</th><th>Estado</th><th>Acciones</th></tr></thead>
                <tbody>
                    <tr><td>12345678</td><td><strong>Juan Pérez</strong></td><td>Arquitectura de Plataformas y Servicios de TI</td><td class="nota nota-alta">17</td><td class="nota nota-alta">16</td><td class="nota nota-alta">18</td><td class="nota nota-alta">16</td><td class="nota nota-alta">17</td><td class="nota nota-alta">16.8</td><td><span class="aprobado">✓ Aprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                    <tr><td>87654321</td><td><strong>María López</strong></td><td>Farmacia Técnica</td><td class="nota nota-alta">15</td><td class="nota nota-alta">16</td><td class="nota nota-media">14</td><td class="nota nota-alta">15</td><td class="nota nota-alta">16</td><td class="nota nota-media">15.2</td><td><span class="aprobado">✓ Aprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                    <tr><td>98765432</td><td><strong>Carlos Ruiz</strong></td><td>Electrónica Industrial</td><td class="nota nota-media">12</td><td class="nota nota-media">13</td><td class="nota nota-media">11</td><td class="nota nota-media">12</td><td class="nota nota-media">13</td><td class="nota nota-media">12.2</td><td><span class="aprobado">✓ Aprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                    <tr><td>54321678</td><td><strong>Ana Torres</strong></td><td>Enfermería Técnica</td><td class="nota nota-alta">18</td><td class="nota nota-alta">19</td><td class="nota nota-alta">17</td><td class="nota nota-alta">18</td><td class="nota nota-alta">19</td><td class="nota nota-alta">18.2</td><td><span class="aprobado">✓ Aprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                    <tr><td>11223344</td><td><strong>Luis Fernández</strong></td><td>Asistencia Administrativa</td><td class="nota nota-baja">08</td><td class="nota nota-media">10</td><td class="nota nota-baja">07</td><td class="nota nota-baja">09</td><td class="nota nota-media">10</td><td class="nota nota-baja">08.8</td><td><span class="desaprobado">✗ Desaprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                    <tr><td>55667788</td><td><strong>Carmen Rojas</strong></td><td>Guía Oficial de Turismo</td><td class="nota nota-alta">16</td><td class="nota nota-alta">18</td><td class="nota nota-alta">17</td><td class="nota nota-alta">15</td><td class="nota nota-alta">16</td><td class="nota nota-alta">16.4</td><td><span class="aprobado">✓ Aprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                    <tr><td>99887766</td><td><strong>Roberto Sánchez</strong></td><td>Mecatrónica Automotriz</td><td class="nota nota-media">14</td><td class="nota nota-media">13</td><td class="nota nota-media">14</td><td class="nota nota-alta">15</td><td class="nota nota-media">14</td><td class="nota nota-media">14.0</td><td><span class="aprobado">✓ Aprobado</span></td><td><button class="btn-nota">✏️ Editar</button></td></tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>