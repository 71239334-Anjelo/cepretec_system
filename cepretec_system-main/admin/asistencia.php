<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/asistencia.css">
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
        <h1>✅ Control de Asistencia</h1>
        
        <div class="filtros-asistencia">
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
            <select>
                <option>Cepre I - 2026</option>
                <option>Cepre II - 2026</option>
                <option>Cepre I - 2027</option>
            </select>
            <input type="date" value="2026-05-27">
            <button>🔍 Consultar</button>
            <button>📊 Generar Reporte</button>
        </div>
        
        <div class="resumen-asistencia">
            <div class="resumen-card"><div class="numero">187</div><div class="label">Total Alumnos</div></div>
            <div class="resumen-card"><div class="numero">172</div><div class="label">Presentes</div></div>
            <div class="resumen-card"><div class="numero">8</div><div class="label">Tarde</div></div>
            <div class="resumen-card"><div class="numero">5</div><div class="label">Ausentes</div></div>
            <div class="resumen-card"><div class="numero">2</div><div class="label">Justificados</div></div>
        </div>
        
        <div class="table-container">
            <table>
                <thead><tr><th>DNI</th><th>Alumno</th><th>Programa</th><th>Hora Ingreso</th><th>Estado</th><th>% Asistencia</th><th>Acciones</th></tr></thead>
                <tbody>
                    <tr><td>12345678</td><td><strong>Juan Pérez</strong></td><td>Arquitectura de Plataformas y Servicios de TI</td><td>08:15 am</td><td><span class="presente">✓ Presente</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 95%"></div></div><small>95%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                    <tr><td>87654321</td><td><strong>María López</strong></td><td>Farmacia Técnica</td><td>08:30 am</td><td><span class="presente">✓ Presente</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 88%"></div></div><small>88%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                    <tr><td>98765432</td><td><strong>Carlos Ruiz</strong></td><td>Electrónica Industrial</td><td>09:10 am</td><td><span class="tarde">⏰ Tarde</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 72%"></div></div><small>72%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                    <tr><td>54321678</td><td><strong>Ana Torres</strong></td><td>Enfermería Técnica</td><td>--:--</td><td><span class="ausente">❌ Ausente</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 45%"></div></div><small>45%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                    <tr><td>11223344</td><td><strong>Luis Fernández</strong></td><td>Asistencia Administrativa</td><td>08:20 am</td><td><span class="presente">✓ Presente</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 91%"></div></div><small>91%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                    <tr><td>55667788</td><td><strong>Carmen Rojas</strong></td><td>Guía Oficial de Turismo</td><td>--:--</td><td><span class="justificado">📋 Justificado</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 68%"></div></div><small>68%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                    <tr><td>99887766</td><td><strong>Roberto Sánchez</strong></td><td>Mecatrónica Automotriz</td><td>08:10 am</td><td><span class="presente">✓ Presente</span></td><td><div class="progress-bar"><div class="progress-fill" style="width: 93%"></div></div><small>93%</small></td><td><button class="btn-asistencia">✅ Marcar</button><button class="btn-asistencia">📝 Justificar</button></td></tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>