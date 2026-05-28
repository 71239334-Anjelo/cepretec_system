<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrículas - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/matriculas.css">
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
        <h1>📝 Gestión de Matrículas</h1>

        <div class="filtros">
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
                <option>2026 - Cepre I</option>
                <option>2026 - Cepre II</option>
                <option>2027 - Cepre I</option>
            </select>
            <button class="btn-filtrar">🔍 Filtrar</button>
        </div>

        <div class="resumen-matriculas">
            <div class="resumen-card">
                <span>187</span>
                <label>Matrículas Activas</label>
            </div>
            <div class="resumen-card">
                <span>23</span>
                <label>Pendientes</label>
            </div>
            <div class="resumen-card">
                <span>7</span>
                <label>Canceladas</label>
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Alumno</th>
                        <th>Programa</th>
                        <th>Cepre</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MAT-001</td>
                        <td><strong>Juan Pérez</strong></td>
                        <td>Arquitectura de Plataformas y Servicios de TI</td>
                        <td>Cepre I - 2026</td>
                        <td>15/01/2026</td>
                        <td><span class="badge-matriculado">✓ Matriculado</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                    <tr>
                        <td>MAT-002</td>
                        <td><strong>María López</strong></td>
                        <td>Farmacia Técnica</td>
                        <td>Cepre II - 2026</td>
                        <td>20/02/2026</td>
                        <td><span class="badge-matriculado">✓ Matriculado</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                    <tr>
                        <td>MAT-003</td>
                        <td><strong>Carlos Ruiz</strong></td>
                        <td>Electrónica Industrial</td>
                        <td>Cepre I - 2026</td>
                        <td>10/01/2026</td>
                        <td><span class="badge-pendiente">⏳ Pendiente</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                    <tr>
                        <td>MAT-004</td>
                        <td><strong>Ana Torres</strong></td>
                        <td>Enfermería Técnica</td>
                        <td>Cepre II - 2026</td>
                        <td>05/03/2026</td>
                        <td><span class="badge-matriculado">✓ Matriculado</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                    <tr>
                        <td>MAT-005</td>
                        <td><strong>Luis Fernández</strong></td>
                        <td>Asistencia Administrativa</td>
                        <td>Cepre I - 2026</td>
                        <td>12/01/2026</td>
                        <td><span class="badge-matriculado">✓ Matriculado</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                    <tr>
                        <td>MAT-006</td>
                        <td><strong>Carmen Rojas</strong></td>
                        <td>Guía Oficial de Turismo</td>
                        <td>Cepre II - 2026</td>
                        <td>18/02/2026</td>
                        <td><span class="badge-graduado">🎓 Graduado</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                    <tr>
                        <td>MAT-007</td>
                        <td><strong>Roberto Sánchez</strong></td>
                        <td>Mecatrónica Automotriz</td>
                        <td>Cepre I - 2026</td>
                        <td>22/01/2026</td>
                        <td><span class="badge-matriculado">✓ Matriculado</span></td>
                        <td><button class="btn-ver">Ver</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>