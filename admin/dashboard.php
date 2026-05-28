<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-align: center;
            border-left: 4px solid #ff9900;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .card h3 {
            color: #003366;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 32px;
            font-weight: 700;
            color: #ff9900;
        }

        /* ALERTAS Y NOTIFICACIONES */
        .alerts-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 30px;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            font-size: 14px;
            border-left: 5px solid transparent;
            font-family: sans-serif;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-left-color: #ff9900;
        }

        .alert-info {
            background-color: #d1ecf1;
            color: #0c5460;
            border-left-color: #003366;
        }

        /* SECCIÓN GRÁFICOS */
        .charts-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .chart-box {
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .chart-box h3 {
            color: #003366;
            font-size: 16px;
            margin-bottom: 15px;
            border-left: 4px solid #ff9900;
            padding-left: 10px;
        }

        /* TABLAS Y COMPONENTES */
        .section-title {
            color: #003366;
            margin: 30px 0 20px 0;
            font-size: 22px;
            border-left: 4px solid #ff9900;
            padding-left: 15px;
        }

        .table-container {
            overflow-x: auto;
            border-radius: 15px;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        table th {
            background: #003366;
            color: white;
            padding: 15px;
            text-align: center;
        }

        table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #eef2f7;
        }

        table tr:hover {
            background: #f9fbfd;
        }

        .badge-activo {
            background: #10b981;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }
    </style>
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
        <h1>📊 Dashboard Administrativo</h1>

        <div class="alerts-container">
            <div class="alert alert-warning">
                <strong>⚠️ Alerta de Matrículas:</strong> Hay 5 solicitudes nuevas esperando validación de pago.
            </div>
            <div class="alert alert-info">
                <strong>ℹ️ Actualización del Sistema:</strong> La asistencia promedio general aumentó un 2% en comparación con la semana pasada.
            </div>
        </div>

        <div class="cards">
            <div class="card"><h3>👥 Total Alumnos</h3><p>260</p></div>
            <div class="card"><h3>📝 Matrículas Activas</h3><p>187</p></div>
            <div class="card"><h3>🎓 Programas</h3><p>7</p></div>
            <div class="card"><h3>✅ Asistencia Promedio</h3><p>92%</p></div>
        </div>

        <div class="charts-container">
            <div class="chart-box">
                <h3>Alumnos por Programa de Estudio</h3>
                <canvas id="graficoProgramas"></canvas>
            </div>
            <div class="chart-box">
                <h3>Rendimiento de Asistencia Mensual</h3>
                <canvas id="graficoAsistencia"></canvas>
            </div>
        </div>

        <h2 class="section-title">🕒 Últimos Alumnos Matriculados</h2>

        <div class="table-container">
            <table>
                <thead>
                    <tr><th>DNI</th><th>Alumno</th><th>Programa</th><th>Cepre</th><th>Estado</th></tr>
                </thead>
                <tbody>
                    <tr><td>12345678</td><td><strong>Juan Pérez</strong></td><td>Arquitectura de Plataformas y Servicios de TI</td><td>Cepre I - 2026</td><td><span class="badge-activo">Activo</span></td></tr>
                    <tr><td>87654321</td><td><strong>María López</strong></td><td>Farmacia Técnica</td><td>Cepre II - 2026</td><td><span class="badge-activo">Activo</span></td></tr>
                    <tr><td>98765432</td><td><strong>Carlos Ruiz</strong></td><td>Electrónica Industrial</td><td>Cepre I - 2026</td><td><span class="badge-activo">Activo</span></td></tr>
                    <tr><td>54321678</td><td><strong>Ana Torres</strong></td><td>Enfermería Técnica</td><td>Cepre II - 2026</td><td><span class="badge-activo">Activo</span></td></tr>
                    <tr><td>11223344</td><td><strong>Luis Fernández</strong></td><td>Asistencia Administrativa</td><td>Cepre I - 2026</td><td><span class="badge-activo">Activo</span></td></tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<script>
    const ctxProg = document.getElementById('graficoProgramas').getContext('2d');
    new Chart(ctxProg, {
        type: 'bar',
        data: {
            // Se agregaron los 7 programas de estudio oficiales para el gráfico
            labels: [
                'Plataformas TI', 
                'Tec. Farmacia', 
                'Electrónica Ind.', 
                'Enfermería Téc.', 
                'Asistencia Adm.', 
                'GOT', 
                'Mecatronica Aut.'
            ],
            datasets: [{
                label: 'Cantidad de Alumnos',
                // Distribución numérica ficticia que suma el total de alumnos
                data: [55, 45, 38, 42, 28, 32, 20], 
                backgroundColor: '#003366',
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Gráfico de Línea - Historial de Asistencia
    const ctxAsis = document.getElementById('graficoAsistencia').getContext('2d');
    new Chart(ctxAsis, {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May'],
            datasets: [{
                label: 'Porcentaje %',
                data: [88, 90, 93, 91, 92],
                borderColor: '#ff9900',
                backgroundColor: 'rgba(255, 153, 0, 0.1)',
                fill: true,
                tension: 0.3,
                borderWidth: 3
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { min: 50, max: 100 }
            }
        }
    });
</script>

</body>
</html>