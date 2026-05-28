<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/reportes.css">
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
        <h1>📄 Generación de Reportes</h1>

        <div class="report-grid">
            <div class="report-card">
                <div class="report-icon">📊</div>
                <h3>Reporte de Alumnos</h3>
                <p>Listado completo de todos los alumnos registrados</p>
                <button class="btn-generar">Generar PDF</button>
            </div>

            <div class="report-card">
                <div class="report-icon">📝</div>
                <h3>Reporte de Matrículas</h3>
                <p>Detalle de matrículas por programa y periodo</p>
                <button class="btn-generar">Generar PDF</button>
            </div>

            <div class="report-card">
                <div class="report-icon">✅</div>
                <h3>Reporte de Asistencia</h3>
                <p>Resumen de asistencia por alumno y curso</p>
                <button class="btn-generar">Generar PDF</button>
            </div>

            <div class="report-card">
                <div class="report-icon">⭐</div>
                <h3>Reporte de Notas</h3>
                <p>Calificaciones finales por alumno y programa</p>
                <button class="btn-generar">Generar PDF</button>
            </div>

            <div class="report-card">
                <div class="report-icon">🏆</div>
                <h3>Reporte de Ranking</h3>
                <p>Top de alumnos por rendimiento académico</p>
                <button class="btn-generar">Generar PDF</button>
            </div>

            <div class="report-card">
                <div class="report-icon">🎓</div>
                <h3>Reporte por Programa</h3>
                <p>Estadísticas detalladas por cada programa</p>
                <button class="btn-generar">Generar PDF</button>
            </div>
        </div>

        <div class="rapidos-section">
            <h3>⚡ Reportes Rápidos</h3>
            <div class="rapidos-buttons">
                <button class="btn-rapido">📋 Alumnos Activos</button>
                <button class="btn-rapido">📊 Matrículas 2026</button>
                <button class="btn-rapido">🎓 Alumnos Graduados</button>
                <button class="btn-rapido">📈 Asistencia General</button>
            </div>
        </div>
    </main>
</div>

</body>
</html>